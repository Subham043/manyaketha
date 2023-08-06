<?php

namespace App\Modules\Campaign\Models;

use App\Modules\Authentication\Models\User;
use App\Modules\Campaign\Faq\Models\Faq;
use App\Modules\Campaign\Gallery\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Campaign extends Model implements Sitemapable
{
    use HasFactory, LogsActivity;

    protected $table = 'campaigns';

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
        'banner_image',
        'about_image',
        'header_logo',
        'footer_logo',
        'address',
        'email',
        'phone',
        'facebook',
        'linkedin',
        'instagram',
        'youtube',
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

    public $cmapaign_path = 'campaign_image';

    protected $appends = ['banner_image_link', 'about_image_link', 'header_logo_link', 'footer_logo_link', 'meta_header_script_nonce', 'meta_footer_script_nonce', 'meta_header_no_script_nonce', 'meta_footer_no_script_nonce'];

    protected function bannerImage(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => 'storage/'.$this->cmapaign_path.'/'.$value,
        );
    }

    protected function bannerImageLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset($this->banner_image),
        );
    }

    protected function aboutImage(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => 'storage/'.$this->cmapaign_path.'/'.$value,
        );
    }

    protected function aboutImageLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset($this->about_image),
        );
    }

    protected function headerLogo(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => 'storage/'.$this->cmapaign_path.'/'.$value,
        );
    }

    protected function headerLogoLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset($this->header_logo),
        );
    }

    protected function footerLogo(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => 'storage/'.$this->cmapaign_path.'/'.$value,
        );
    }

    protected function footerLogoLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset($this->footer_logo),
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

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'campaign_id');
    }

    public function faq()
    {
        return $this->hasMany(Faq::class, 'campaign_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('campaigns')
        ->setDescriptionForEvent(
                function(string $eventName){
                    $desc = "Campaign with name ".$this->name." has been {$eventName}";
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
        return route('campaign_detail.get', $this->slug);
    }

}
