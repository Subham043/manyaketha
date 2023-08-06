<?php

namespace App\Modules\Campaign\Faq\Models;

use App\Modules\Campaign\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Faq extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'campaign_faqs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question',
        'answer',
        'campaign_id',
        'is_draft'
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

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
                    $desc = "Faq has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
