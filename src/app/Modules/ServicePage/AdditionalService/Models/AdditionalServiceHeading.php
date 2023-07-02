<?php

namespace App\Modules\ServicePage\AdditionalService\Models;

use App\Modules\Authentication\Models\User;
use App\Modules\ServicePage\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class AdditionalServiceHeading extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'additional_service_headings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'heading',
        'description',
        'service_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id')->withDefault();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('procedure heading section')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Additional Service heading detail has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
