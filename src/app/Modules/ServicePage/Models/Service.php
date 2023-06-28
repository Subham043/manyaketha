<?php

namespace App\Modules\ServicePage\Models;

use App\Modules\Authentication\Models\User;
use App\Modules\ServicePage\AdditionalContent\Models\AdditionalContent;
use App\Modules\ServicePage\AdditionalService\Models\AdditionalService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Service extends Model implements Sitemapable
{
    use HasFactory, LogsActivity;

    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'heading',
        'description',
        'description_unfiltered',
        'brochure',
        'image',
        'item_order',
        'is_draft',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_header_script',
        'meta_footer_script',
        'meta_header_no_script',
        'meta_footer_no_script',
    ];

    protected $casts = [
        'is_draft' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public $brochure_path = 'services_brochure';
    public $image_path = 'services_image';

    protected $appends = ['brochure_link', 'image_link', 'meta_header_script_nonce', 'meta_footer_script_nonce', 'meta_header_no_script_nonce', 'meta_footer_no_script_nonce'];

    public static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            Cache::forget('all_service_main');
            Cache::forget('latest_six_service_main');
            Cache::forget('service_'.$model->slug);
        });
        self::updated(function ($model) {
            Cache::forget('all_service_main');
            Cache::forget('latest_six_service_main');
            Cache::forget('service_'.$model->slug);
        });
        self::deleted(function ($model) {
            Cache::forget('all_service_main');
            Cache::forget('latest_six_service_main');
            Cache::forget('service_'.$model->slug);
        });
    }

    protected function brochure(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => 'storage/'.$this->brochure_path.'/'.$value,
        );
    }

    protected function brochureLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset($this->brochure),
        );
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

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => str()->slug($value),
        );
    }

    protected function metaHeaderScriptNonce(): Attribute
    {
        return new Attribute(
            get: fn () => str_replace("<script","<script nonce='".csp_nonce()."'",$this->meta_header_script),
        );
    }

    protected function metaHeaderNoScriptNonce(): Attribute
    {
        return new Attribute(
            get: fn () => str_replace("<noscript","<noscript nonce='".csp_nonce()."'",$this->meta_header_no_script),
        );
    }

    protected function metaFooterScriptNonce(): Attribute
    {
        return new Attribute(
            get: fn () => str_replace("<script","<script nonce='".csp_nonce()."'",$this->meta_footer_script),
        );
    }

    protected function metaFooterNoScriptNonce(): Attribute
    {
        return new Attribute(
            get: fn () => str_replace("<noscript","<noscript nonce='".csp_nonce()."'",$this->meta_footer_no_script),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function additional_contents()
    {
        return $this->hasMany(AdditionalContent::class, 'service_id');
    }

    public function additional_services()
    {
        return $this->hasMany(AdditionalService::class, 'service_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('services')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Service with name ".$this->name." has been {$eventName}";
                    $desc .= auth()->user() ? " by ".auth()->user()->name."<".auth()->user()->email.">" : "";
                    return $desc;
                }
            )
        ->logFillable()
        ->logOnlyDirty();
        // Chain fluent methods for configuration options
    }

    public function toSitemapTag(): Url | string | array
    {
        return route('services_detail.get', $this->slug);
    }

}
