<?php

namespace App\Modules\Procedure\Models;

use App\Modules\Authentication\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Procedure extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'procedures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'is_draft'
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $image_path = 'procedures';

    protected $appends = ['image_link'];

    public static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            Cache::forget('procedures_main');
        });
        self::updated(function ($model) {
            Cache::forget('procedures_main');
        });
        self::deleted(function ($model) {
            Cache::forget('procedures_main');
        });
    }

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('procedure')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Procedure has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
