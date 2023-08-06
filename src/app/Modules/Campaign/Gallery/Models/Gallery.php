<?php

namespace App\Modules\Campaign\Gallery\Models;

use App\Modules\Campaign\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Gallery extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'campaign_galleries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'image_title',
        'campaign_id',
        'is_draft'
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $image_path = 'campaign_galleries';

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

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id')->withDefault();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('project')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Gallery has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
