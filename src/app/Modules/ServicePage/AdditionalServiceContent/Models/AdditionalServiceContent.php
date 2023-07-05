<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Models;

use App\Modules\ServicePage\AdditionalService\Models\AdditionalService;
use App\Modules\ServicePage\AdditionalServiceContentImage\Models\AdditionalServiceContentImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class AdditionalServiceContent extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'additional_service_contents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'additional_service_id',
        'name',
        'description',
        'description_unfiltered',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $image_path = 'additional_service_contents';

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

    public function additional_service()
    {
        return $this->belongsTo(AdditionalService::class, 'additional_service_id')->withDefault();
    }

    public function additional_service_content_images()
    {
        return $this->hasMany(AdditionalServiceContentImage::class, 'content_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('Additional service page additional content section')
        ->setDescriptionForEvent(
            function(string $eventName){
                $desc = "Additional content with heading ".$this->heading." has been {$eventName}";
                $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                return $desc;
            }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
