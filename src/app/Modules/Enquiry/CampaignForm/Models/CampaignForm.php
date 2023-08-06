<?php

namespace App\Modules\Enquiry\CampaignForm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Casts\Attribute;

class CampaignForm extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'campaign_enquiries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'page_url',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $image_path = 'campaign_enquiries';

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
        ->useLogName('campaign form enquiries')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Campaign form enquiry with user name ".$this->name." has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
