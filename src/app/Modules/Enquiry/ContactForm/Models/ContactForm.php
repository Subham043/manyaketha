<?php

namespace App\Modules\Enquiry\ContactForm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ContactForm extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'contact_form_enquiries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
        'page_url',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $image_path = 'contacts';

    protected $appends = ['image_link'];

    protected function image(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => 'storage/'.$this->image_path.'/'.$value,
        );
    }

    protected function imageLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset($this->image),
        );
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('contact form enquiries')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Contact form enquiry with user name ".$this->name." has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
