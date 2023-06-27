<?php

namespace App\Modules\HomePage\BannerVideo\Models;

use App\Modules\Authentication\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class BannerVideo extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'home_page_banner_videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'banner_video',
        'banner_video_alt',
        'banner_video_title',
        'is_draft'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'is_draft' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('home page banner video section')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Home page banner video detail has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
