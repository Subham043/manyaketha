<?php

namespace App\Modules\ProjectPage\Category\Models;

use App\Modules\Authentication\Models\User;
use App\Modules\ProjectPage\Project\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Category extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'project_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $appends = ['slug'];

    public static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            Cache::forget('project_category_four_main');
            Cache::forget('project_main_all');
        });
        self::updated(function ($model) {
            Cache::forget('project_category_four_main');
            Cache::forget('project_main_all');
        });
        self::deleted(function ($model) {
            Cache::forget('project_category_four_main');
            Cache::forget('project_main_all');
        });
    }

    protected function slug(): Attribute
    {
        return new Attribute(
            get: fn () => str()->slug($this->title)
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function project()
    {
        return $this->hasMany(Project::class, 'category_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('project categories')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Project Category has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
