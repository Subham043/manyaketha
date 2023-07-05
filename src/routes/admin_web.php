<?php

use App\Modules\Authentication\Controllers\PasswordUpdateController;
use App\Modules\Authentication\Controllers\ForgotPasswordController;
use App\Modules\Authentication\Controllers\LoginController;
use App\Modules\Authentication\Controllers\LogoutController;
use App\Modules\Authentication\Controllers\ProfileController;
use App\Modules\Authentication\Controllers\ResetPasswordController;
use App\Modules\Dashboard\Controllers\DashboardController;
use App\Modules\Enquiry\ContactForm\Controllers\ContactFormDeleteController;
use App\Modules\Enquiry\ContactForm\Controllers\ContactFormExcelController;
use App\Modules\Enquiry\ContactForm\Controllers\ContactFormPaginateController;
use App\Modules\Legal\Controllers\LegalPaginateController;
use App\Modules\Legal\Controllers\LegalUpdateController;
use App\Modules\Blog\Controllers\BlogCreateController;
use App\Modules\Blog\Controllers\BlogDeleteController;
use App\Modules\Blog\Controllers\BlogPaginateController;
use App\Modules\Blog\Controllers\BlogUpdateController;
use App\Modules\Counter\Controllers\CounterCreateController;
use App\Modules\Counter\Controllers\CounterDeleteController;
use App\Modules\Counter\Controllers\CounterPaginateController;
use App\Modules\Counter\Controllers\CounterUpdateController;
use App\Modules\Partner\Controllers\PartnerCreateController;
use App\Modules\Partner\Controllers\PartnerDeleteController;
use App\Modules\Partner\Controllers\PartnerPaginateController;
use App\Modules\Partner\Controllers\PartnerUpdateController;
use App\Modules\Role\Controllers\RoleCreateController;
use App\Modules\Role\Controllers\RoleDeleteController;
use App\Modules\Role\Controllers\RolePaginateController;
use App\Modules\Role\Controllers\RoleUpdateController;
use App\Modules\Seo\Controllers\SeoPaginateController;
use App\Modules\Seo\Controllers\SeoUpdateController;
use App\Modules\Settings\Controllers\ActivityLog\ActivityLogDetailController;
use App\Modules\Settings\Controllers\ActivityLog\ActivityLogPaginateController;
use App\Modules\Settings\Controllers\Chatbot\ChatbotController;
use App\Modules\Settings\Controllers\ErrorLogController;
use App\Modules\Settings\Controllers\General\GeneralController;
use App\Modules\Settings\Controllers\SitemapController;
use App\Modules\Settings\Controllers\Theme\ThemeController;
use App\Modules\User\Controllers\UserCreateController;
use App\Modules\User\Controllers\UserDeleteController;
use App\Modules\User\Controllers\UserPaginateController;
use App\Modules\User\Controllers\UserUpdateController;
use App\Modules\Testimonial\Controllers\TestimonialCreateController;
use App\Modules\Testimonial\Controllers\TestimonialDeleteController;
use App\Modules\Testimonial\Controllers\TestimonialHeadingController;
use App\Modules\Testimonial\Controllers\TestimonialPaginateController;
use App\Modules\Testimonial\Controllers\TestimonialUpdateController;
use App\Modules\Team\Controllers\TeamCreateController;
use App\Modules\Team\Controllers\TeamDeleteController;
use App\Modules\Team\Controllers\TeamHeadingController;
use App\Modules\Team\Controllers\TeamPaginateController;
use App\Modules\Team\Controllers\TeamUpdateController;
use App\Modules\HomePage\Banner\Controllers\BannerCreateController;
use App\Modules\HomePage\Banner\Controllers\BannerDeleteController;
use App\Modules\HomePage\Banner\Controllers\BannerPaginateController;
use App\Modules\HomePage\Banner\Controllers\BannerUpdateController;
use App\Modules\HomePage\About\Controllers\AboutController;
use App\Modules\HomePage\AdditionalContent\Controllers\AdditionalContentCreateController;
use App\Modules\HomePage\AdditionalContent\Controllers\AdditionalContentDeleteController;
use App\Modules\HomePage\AdditionalContent\Controllers\AdditionalContentPaginateController;
use App\Modules\HomePage\AdditionalContent\Controllers\AdditionalContentUpdateController;
use App\Modules\AboutPage\About\Controllers\AboutController as AboutPageController;
use App\Modules\AboutPage\AdditionalContent\Controllers\AdditionalContentCreateController as AdditionalContentPageCreateController;
use App\Modules\AboutPage\AdditionalContent\Controllers\AdditionalContentDeleteController as AdditionalContentPageDeleteController;
use App\Modules\AboutPage\AdditionalContent\Controllers\AdditionalContentPaginateController as AdditionalContentPagePaginateController;
use App\Modules\AboutPage\AdditionalContent\Controllers\AdditionalContentUpdateController as AdditionalContentPageUpdateController;
use App\Modules\Blog\Controllers\BlogHeadingController;
use App\Modules\CallToAction\Controllers\CallToActionController;
use App\Modules\Feature\Controllers\FeatureCreateController;
use App\Modules\Feature\Controllers\FeatureDeleteController;
use App\Modules\Feature\Controllers\FeatureHeadingController;
use App\Modules\Feature\Controllers\FeaturePaginateController;
use App\Modules\Feature\Controllers\FeatureUpdateController;
use App\Modules\HomePage\BannerVideo\Controllers\BannerVideoController;
use App\Modules\Offer\Controllers\OfferController;
use App\Modules\Procedure\Controllers\ProcedureCreateController;
use App\Modules\Procedure\Controllers\ProcedureDeleteController;
use App\Modules\Procedure\Controllers\ProcedureHeadingController;
use App\Modules\Procedure\Controllers\ProcedurePaginateController;
use App\Modules\Procedure\Controllers\ProcedureUpdateController;
use App\Modules\ProjectPage\Category\Controllers\CategoryCreateController;
use App\Modules\ProjectPage\Category\Controllers\CategoryDeleteController;
use App\Modules\ProjectPage\Category\Controllers\CategoryPaginateController;
use App\Modules\ProjectPage\Category\Controllers\CategoryUpdateController;
use App\Modules\ProjectPage\Project\Controllers\ProjectCreateController;
use App\Modules\ProjectPage\Project\Controllers\ProjectDeleteController;
use App\Modules\ProjectPage\Project\Controllers\ProjectHeadingController;
use App\Modules\ProjectPage\Project\Controllers\ProjectPaginateController;
use App\Modules\ProjectPage\Project\Controllers\ProjectUpdateController;
use App\Modules\ServicePage\Controllers\ServiceCreateController;
use App\Modules\ServicePage\Controllers\ServiceDeleteController;
use App\Modules\ServicePage\Controllers\ServiceHeadingController;
use App\Modules\ServicePage\Controllers\ServicePaginateController;
use App\Modules\ServicePage\Controllers\ServiceUpdateController;
use App\Modules\TextEditorImage\Controllers\TextEditorImageController;
use App\Modules\ServicePage\AdditionalContent\Controllers\AdditionalContentCreateController as ServiceAdditionalContentCreateController;
use App\Modules\ServicePage\AdditionalContent\Controllers\AdditionalContentDeleteController as ServiceAdditionalContentDeleteController;
use App\Modules\ServicePage\AdditionalContent\Controllers\AdditionalContentPaginateController as ServiceAdditionalContentPaginateController;
use App\Modules\ServicePage\AdditionalContent\Controllers\AdditionalContentUpdateController as ServiceAdditionalContentUpdateController;
use App\Modules\ServicePage\AdditionalService\Controllers\AdditionalServiceCreateController;
use App\Modules\ServicePage\AdditionalService\Controllers\AdditionalServiceDeleteController;
use App\Modules\ServicePage\AdditionalService\Controllers\AdditionalServicePaginateController;
use App\Modules\ServicePage\AdditionalService\Controllers\AdditionalServiceUpdateController;
use App\Modules\ServicePage\AdditionalContent\Controllers\AdditionalContentHeadingController;
use App\Modules\ServicePage\AdditionalContentImage\Controllers\AdditionalContentImageCreateController;
use App\Modules\ServicePage\AdditionalContentImage\Controllers\AdditionalContentImageDeleteController;
use App\Modules\ServicePage\AdditionalContentImage\Controllers\AdditionalContentImagePaginateController;
use App\Modules\ServicePage\AdditionalService\Controllers\AdditionalServiceHeadingController;
use App\Modules\ServicePage\AdditionalServiceContent\Controllers\AdditionalServiceContentCreateController;
use App\Modules\ServicePage\AdditionalServiceContent\Controllers\AdditionalServiceContentDeleteController;
use App\Modules\ServicePage\AdditionalServiceContent\Controllers\AdditionalServiceContentPaginateController;
use App\Modules\ServicePage\AdditionalServiceContent\Controllers\AdditionalServiceContentUpdateController;
use App\Modules\ServicePage\AdditionalServiceContentImage\Controllers\AdditionalServiceContentImageCreateController;
use App\Modules\ServicePage\AdditionalServiceContentImage\Controllers\AdditionalServiceContentImageDeleteController;
use App\Modules\ServicePage\AdditionalServiceContentImage\Controllers\AdditionalServiceContentImagePaginateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'get', 'as' => 'login.get'])->name('login.get');
    Route::post('/authenticate', [LoginController::class, 'post', 'as' => 'login.post'])->name('login.post');
    Route::get('/forgot-password', [ForgotPasswordController::class, 'get', 'as' => 'forgot_password.get'])->name('forgot_password.get');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'post', 'as' => 'forgot_password.post'])->name('forgot_password.post');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'get', 'as' => 'reset_password.get'])->name('reset_password.get')->middleware('signed');
    Route::post('/reset-password/{token}', [ResetPasswordController::class, 'post', 'as' => 'reset_password.post'])->name('reset_password.post')->middleware('signed');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'get', 'as' => 'dashboard.get'])->name('dashboard.get');

    Route::prefix('/setting')->group(function () {
        Route::get('/general', [GeneralController::class, 'get', 'as' => 'general.settings.get'])->name('general.settings.get');
        Route::post('/general-post', [GeneralController::class, 'post', 'as' => 'general.settings.post'])->name('general.settings.post');
        Route::get('/theme', [ThemeController::class, 'get', 'as' => 'theme.settings.get'])->name('theme.settings.get');
        Route::post('/theme-post', [ThemeController::class, 'post', 'as' => 'theme.settings.post'])->name('theme.settings.post');
        Route::get('/chatbot', [ChatbotController::class, 'get', 'as' => 'chatbot.settings.get'])->name('chatbot.settings.get');
        Route::post('/chatbot-post', [ChatbotController::class, 'post', 'as' => 'chatbot.settings.post'])->name('chatbot.settings.post');
        Route::get('/sitemap', [SitemapController::class, 'get', 'as' => 'sitemap.get'])->name('sitemap.get');
        Route::get('/sitemap-generate', [SitemapController::class, 'generate', 'as' => 'sitemap.generate'])->name('sitemap.generate');
    });

    Route::prefix('/logs')->group(function () {
        Route::get('/error', [ErrorLogController::class, 'get', 'as' => 'error_log.get'])->name('error_log.get');
        Route::prefix('/activity')->group(function () {
            Route::get('/', [ActivityLogPaginateController::class, 'get', 'as' => 'activity_log.paginate.get'])->name('activity_log.paginate.get');
            Route::get('/{id}', [ActivityLogDetailController::class, 'get', 'as' => 'activity_log.detail.get'])->name('activity_log.detail.get');

        });
    });

    Route::prefix('/enquiry')->group(function () {
        Route::prefix('/contact-form')->group(function () {
            Route::get('/', [ContactFormPaginateController::class, 'get', 'as' => 'enquiry.contact_form.paginate.get'])->name('enquiry.contact_form.paginate.get');
            Route::get('/excel', [ContactFormExcelController::class, 'get', 'as' => 'enquiry.contact_form.excel.get'])->name('enquiry.contact_form.excel.get');
            Route::get('/delete/{id}', [ContactFormDeleteController::class, 'get', 'as' => 'enquiry.contact_form.delete.get'])->name('enquiry.contact_form.delete.get');

        });
    });

    Route::prefix('/legal-pages')->group(function () {
        Route::get('/', [LegalPaginateController::class, 'get', 'as' => 'legal.paginate.get'])->name('legal.paginate.get');
        Route::get('/update/{slug}', [LegalUpdateController::class, 'get', 'as' => 'legal.update.get'])->name('legal.update.get');
        Route::post('/update/{slug}', [LegalUpdateController::class, 'post', 'as' => 'legal.update.post'])->name('legal.update.post');
    });

    Route::prefix('/seo')->group(function () {
        Route::get('/', [SeoPaginateController::class, 'get', 'as' => 'seo.paginate.get'])->name('seo.paginate.get');
        Route::get('/update/{slug}', [SeoUpdateController::class, 'get', 'as' => 'seo.update.get'])->name('seo.update.get');
        Route::post('/update/{slug}', [SeoUpdateController::class, 'post', 'as' => 'seo.update.post'])->name('seo.update.post');
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'get', 'as' => 'profile.get'])->name('profile.get');
        Route::post('/update', [ProfileController::class, 'post', 'as' => 'profile.post'])->name('profile.post');
        Route::post('/profile-password-update', [PasswordUpdateController::class, 'post', 'as' => 'password.post'])->name('password.post');
    });

    Route::prefix('/role')->group(function () {
        Route::get('/', [RolePaginateController::class, 'get', 'as' => 'role.paginate.get'])->name('role.paginate.get');
        Route::get('/create', [RoleCreateController::class, 'get', 'as' => 'role.create.get'])->name('role.create.get');
        Route::post('/create', [RoleCreateController::class, 'post', 'as' => 'role.create.get'])->name('role.create.post');
        Route::get('/update/{id}', [RoleUpdateController::class, 'get', 'as' => 'role.update.get'])->name('role.update.get');
        Route::post('/update/{id}', [RoleUpdateController::class, 'post', 'as' => 'role.update.get'])->name('role.update.post');
        Route::get('/delete/{id}', [RoleDeleteController::class, 'get', 'as' => 'role.delete.get'])->name('role.delete.get');
    });

    Route::prefix('/user')->group(function () {
        Route::get('/', [UserPaginateController::class, 'get', 'as' => 'user.paginate.get'])->name('user.paginate.get');
        Route::get('/create', [UserCreateController::class, 'get', 'as' => 'user.create.get'])->name('user.create.get');
        Route::post('/create', [UserCreateController::class, 'post', 'as' => 'user.create.get'])->name('user.create.post');
        Route::get('/update/{id}', [UserUpdateController::class, 'get', 'as' => 'user.update.get'])->name('user.update.get');
        Route::post('/update/{id}', [UserUpdateController::class, 'post', 'as' => 'user.update.get'])->name('user.update.post');
        Route::get('/delete/{id}', [UserDeleteController::class, 'get', 'as' => 'user.delete.get'])->name('user.delete.get');
    });

    Route::prefix('/blog')->group(function () {
        Route::get('/', [BlogPaginateController::class, 'get', 'as' => 'blog.paginate.get'])->name('blog.paginate.get');
        Route::get('/create', [BlogCreateController::class, 'get', 'as' => 'blog.create.get'])->name('blog.create.get');
        Route::post('/create', [BlogCreateController::class, 'post', 'as' => 'blog.create.post'])->name('blog.create.post');
        Route::get('/update/{id}', [BlogUpdateController::class, 'get', 'as' => 'blog.update.get'])->name('blog.update.get');
        Route::post('/update/{id}', [BlogUpdateController::class, 'post', 'as' => 'blog.update.post'])->name('blog.update.post');
        Route::get('/delete/{id}', [BlogDeleteController::class, 'get', 'as' => 'blog.delete.get'])->name('blog.delete.get');
        Route::post('/heading', [BlogHeadingController::class, 'post', 'as' => 'blog.heading.post'])->name('blog.heading.post');
    });

    Route::prefix('/partner')->group(function () {
        Route::get('/', [PartnerPaginateController::class, 'get', 'as' => 'partner.paginate.get'])->name('partner.paginate.get');
        Route::get('/create', [PartnerCreateController::class, 'get', 'as' => 'partner.create.get'])->name('partner.create.get');
        Route::post('/create', [PartnerCreateController::class, 'post', 'as' => 'partner.create.post'])->name('partner.create.post');
        Route::get('/update/{id}', [PartnerUpdateController::class, 'get', 'as' => 'partner.update.get'])->name('partner.update.get');
        Route::post('/update/{id}', [PartnerUpdateController::class, 'post', 'as' => 'partner.update.post'])->name('partner.update.post');
        Route::get('/delete/{id}', [PartnerDeleteController::class, 'get', 'as' => 'partner.delete.get'])->name('partner.delete.get');

    });

    Route::prefix('/counter')->group(function () {
        Route::get('/', [CounterPaginateController::class, 'get', 'as' => 'counter.paginate.get'])->name('counter.paginate.get');
        Route::get('/create', [CounterCreateController::class, 'get', 'as' => 'counter.create.get'])->name('counter.create.get');
        Route::post('/create', [CounterCreateController::class, 'post', 'as' => 'counter.create.post'])->name('counter.create.post');
        Route::get('/update/{id}', [CounterUpdateController::class, 'get', 'as' => 'counter.update.get'])->name('counter.update.get');
        Route::post('/update/{id}', [CounterUpdateController::class, 'post', 'as' => 'counter.update.post'])->name('counter.update.post');
        Route::get('/delete/{id}', [CounterDeleteController::class, 'get', 'as' => 'counter.delete.get'])->name('counter.delete.get');

    });

    Route::prefix('/testimonial')->group(function () {
        Route::get('/', [TestimonialPaginateController::class, 'get', 'as' => 'testimonial.paginate.get'])->name('testimonial.paginate.get');
        Route::get('/create', [TestimonialCreateController::class, 'get', 'as' => 'testimonial.create.get'])->name('testimonial.create.get');
        Route::post('/create', [TestimonialCreateController::class, 'post', 'as' => 'testimonial.create.post'])->name('testimonial.create.post');
        Route::get('/update/{id}', [TestimonialUpdateController::class, 'get', 'as' => 'testimonial.update.get'])->name('testimonial.update.get');
        Route::post('/update/{id}', [TestimonialUpdateController::class, 'post', 'as' => 'testimonial.update.post'])->name('testimonial.update.post');
        Route::get('/delete/{id}', [TestimonialDeleteController::class, 'get', 'as' => 'testimonial.delete.get'])->name('testimonial.delete.get');
        Route::post('/heading', [TestimonialHeadingController::class, 'post', 'as' => 'testimonial.heading.post'])->name('testimonial.heading.post');

    });

    Route::prefix('/procedure')->group(function () {
        Route::get('/', [ProcedurePaginateController::class, 'get', 'as' => 'procedure.paginate.get'])->name('procedure.paginate.get');
        Route::get('/create', [ProcedureCreateController::class, 'get', 'as' => 'procedure.create.get'])->name('procedure.create.get');
        Route::post('/create', [ProcedureCreateController::class, 'post', 'as' => 'procedure.create.post'])->name('procedure.create.post');
        Route::get('/update/{id}', [ProcedureUpdateController::class, 'get', 'as' => 'procedure.update.get'])->name('procedure.update.get');
        Route::post('/update/{id}', [ProcedureUpdateController::class, 'post', 'as' => 'procedure.update.post'])->name('procedure.update.post');
        Route::get('/delete/{id}', [ProcedureDeleteController::class, 'get', 'as' => 'procedure.delete.get'])->name('procedure.delete.get');
        Route::post('/heading', [ProcedureHeadingController::class, 'post', 'as' => 'procedure.heading.post'])->name('procedure.heading.post');

    });

    Route::prefix('/feature')->group(function () {
        Route::get('/', [FeaturePaginateController::class, 'get', 'as' => 'feature.paginate.get'])->name('feature.paginate.get');
        Route::get('/create', [FeatureCreateController::class, 'get', 'as' => 'feature.create.get'])->name('feature.create.get');
        Route::post('/create', [FeatureCreateController::class, 'post', 'as' => 'feature.create.post'])->name('feature.create.post');
        Route::get('/update/{id}', [FeatureUpdateController::class, 'get', 'as' => 'feature.update.get'])->name('feature.update.get');
        Route::post('/update/{id}', [FeatureUpdateController::class, 'post', 'as' => 'feature.update.post'])->name('feature.update.post');
        Route::get('/delete/{id}', [FeatureDeleteController::class, 'get', 'as' => 'feature.delete.get'])->name('feature.delete.get');
        Route::post('/heading', [FeatureHeadingController::class, 'post', 'as' => 'feature.heading.post'])->name('feature.heading.post');

    });

    Route::prefix('/team')->group(function () {
        Route::get('/', [TeamPaginateController::class, 'get', 'as' => 'team.paginate.get'])->name('team.paginate.get');
        Route::get('/create', [TeamCreateController::class, 'get', 'as' => 'team.create.get'])->name('team.create.get');
        Route::post('/create', [TeamCreateController::class, 'post', 'as' => 'team.create.post'])->name('team.create.post');
        Route::get('/update/{id}', [TeamUpdateController::class, 'get', 'as' => 'team.update.get'])->name('team.update.get');
        Route::post('/update/{id}', [TeamUpdateController::class, 'post', 'as' => 'team.update.post'])->name('team.update.post');
        Route::get('/delete/{id}', [TeamDeleteController::class, 'get', 'as' => 'team.delete.get'])->name('team.delete.get');
        Route::post('/heading', [TeamHeadingController::class, 'post', 'as' => 'team.heading.post'])->name('team.heading.post');

    });

    Route::prefix('/home-page')->group(function () {
        Route::prefix('/banner')->group(function () {
            Route::get('/', [BannerPaginateController::class, 'get', 'as' => 'home_page.banner.paginate.get'])->name('home_page.banner.paginate.get');
            Route::get('/create', [BannerCreateController::class, 'get', 'as' => 'home_page.banner.create.get'])->name('home_page.banner.create.get');
            Route::post('/create', [BannerCreateController::class, 'post', 'as' => 'home_page.banner.create.post'])->name('home_page.banner.create.post');
            Route::get('/update/{id}', [BannerUpdateController::class, 'get', 'as' => 'home_page.banner.update.get'])->name('home_page.banner.update.get');
            Route::post('/update/{id}', [BannerUpdateController::class, 'post', 'as' => 'home_page.banner.update.post'])->name('home_page.banner.update.post');
            Route::get('/delete/{id}', [BannerDeleteController::class, 'get', 'as' => 'home_page.banner.delete.get'])->name('home_page.banner.delete.get');

        });

        Route::prefix('/banner-video')->group(function () {
            Route::get('/', [BannerVideoController::class, 'get', 'as' => 'home_page.banner_video.get'])->name('home_page.banner_video.get');
            Route::post('/', [BannerVideoController::class, 'post', 'as' => 'home_page.banner_video.post'])->name('home_page.banner_video.post');
        });

        Route::prefix('/about-section')->group(function () {
            Route::get('/', [AboutController::class, 'get', 'as' => 'home_page.about.get'])->name('home_page.about.get');
            Route::post('/', [AboutController::class, 'post', 'as' => 'home_page.about.post'])->name('home_page.about.post');
        });

        Route::prefix('/additional-content')->group(function () {
            Route::get('/', [AdditionalContentPaginateController::class, 'get', 'as' => 'home_page.additional_content.paginate.get'])->name('home_page.additional_content.paginate.get');
            Route::get('/create', [AdditionalContentCreateController::class, 'get', 'as' => 'home_page.additional_content.create.get'])->name('home_page.additional_content.create.get');
            Route::post('/create', [AdditionalContentCreateController::class, 'post', 'as' => 'home_page.additional_content.create.post'])->name('home_page.additional_content.create.post');
            Route::get('/update/{id}', [AdditionalContentUpdateController::class, 'get', 'as' => 'home_page.additional_content.update.get'])->name('home_page.additional_content.update.get');
            Route::post('/update/{id}', [AdditionalContentUpdateController::class, 'post', 'as' => 'home_page.additional_content.update.post'])->name('home_page.additional_content.update.post');
            Route::get('/delete/{id}', [AdditionalContentDeleteController::class, 'get', 'as' => 'home_page.additional_content.delete.get'])->name('home_page.additional_content.delete.get');

        });

    });

    Route::prefix('/offer')->group(function () {
        Route::get('/', [OfferController::class, 'get', 'as' => 'offer.get'])->name('offer.get');
        Route::post('/', [OfferController::class, 'post', 'as' => 'offer.post'])->name('offer.post');
    });

    Route::prefix('/call-to-action')->group(function () {
        Route::get('/', [CallToActionController::class, 'get', 'as' => 'ctc.get'])->name('ctc.get');
        Route::post('/', [CallToActionController::class, 'post', 'as' => 'ctc.post'])->name('ctc.post');
    });

    Route::prefix('/about-page')->group(function () {

        Route::prefix('/about-section')->group(function () {
            Route::get('/', [AboutPageController::class, 'get', 'as' => 'about_page.about.get'])->name('about_page.about.get');
            Route::post('/', [AboutPageController::class, 'post', 'as' => 'about_page.about.post'])->name('about_page.about.post');
        });

        Route::prefix('/additional-content')->group(function () {
            Route::get('/', [AdditionalContentPagePaginateController::class, 'get', 'as' => 'about_page.additional_content.paginate.get'])->name('about_page.additional_content.paginate.get');
            Route::get('/create', [AdditionalContentPageCreateController::class, 'get', 'as' => 'about_page.additional_content.create.get'])->name('about_page.additional_content.create.get');
            Route::post('/create', [AdditionalContentPageCreateController::class, 'post', 'as' => 'about_page.additional_content.create.post'])->name('about_page.additional_content.create.post');
            Route::get('/update/{id}', [AdditionalContentPageUpdateController::class, 'get', 'as' => 'about_page.additional_content.update.get'])->name('about_page.additional_content.update.get');
            Route::post('/update/{id}', [AdditionalContentPageUpdateController::class, 'post', 'as' => 'about_page.additional_content.update.post'])->name('about_page.additional_content.update.post');
            Route::get('/delete/{id}', [AdditionalContentPageDeleteController::class, 'get', 'as' => 'about_page.additional_content.delete.get'])->name('about_page.additional_content.delete.get');

        });

    });

    Route::prefix('/project')->group(function () {

        Route::get('/', [ProjectPaginateController::class, 'get', 'as' => 'project.paginate.get'])->name('project.paginate.get');
        Route::get('/create', [ProjectCreateController::class, 'get', 'as' => 'project.create.get'])->name('project.create.get');
        Route::post('/create', [ProjectCreateController::class, 'post', 'as' => 'project.create.post'])->name('project.create.post');
        Route::get('/update/{id}', [ProjectUpdateController::class, 'get', 'as' => 'project.update.get'])->name('project.update.get');
        Route::post('/update/{id}', [ProjectUpdateController::class, 'post', 'as' => 'project.update.post'])->name('project.update.post');
        Route::get('/delete/{id}', [ProjectDeleteController::class, 'get', 'as' => 'project.delete.get'])->name('project.delete.get');
        Route::post('/heading', [ProjectHeadingController::class, 'post', 'as' => 'project.heading.post'])->name('project.heading.post');

        Route::prefix('/common-amenity')->group(function () {
            Route::get('/', [CategoryPaginateController::class, 'get', 'as' => 'project.category.paginate.get'])->name('project.category.paginate.get');
            Route::get('/create', [CategoryCreateController::class, 'get', 'as' => 'project.category.create.get'])->name('project.category.create.get');
            Route::post('/create', [CategoryCreateController::class, 'post', 'as' => 'project.category.create.post'])->name('project.category.create.post');
            Route::get('/update/{id}', [CategoryUpdateController::class, 'get', 'as' => 'project.category.update.get'])->name('project.category.update.get');
            Route::post('/update/{id}', [CategoryUpdateController::class, 'post', 'as' => 'project.category.update.post'])->name('project.category.update.post');
            Route::get('/delete/{id}', [CategoryDeleteController::class, 'get', 'as' => 'project.category.delete.get'])->name('project.category.delete.get');
        });
    });

    Route::prefix('/service')->group(function () {

        Route::get('/', [ServicePaginateController::class, 'get', 'as' => 'service.paginate.get'])->name('service.paginate.get');
        Route::get('/create', [ServiceCreateController::class, 'get', 'as' => 'service.create.get'])->name('service.create.get');
        Route::post('/create', [ServiceCreateController::class, 'post', 'as' => 'service.create.post'])->name('service.create.post');
        Route::get('/update/{id}', [ServiceUpdateController::class, 'get', 'as' => 'service.update.get'])->name('service.update.get');
        Route::post('/update/{id}', [ServiceUpdateController::class, 'post', 'as' => 'service.update.post'])->name('service.update.post');
        Route::get('/delete/{id}', [ServiceDeleteController::class, 'get', 'as' => 'service.delete.get'])->name('service.delete.get');
        Route::post('/heading', [ServiceHeadingController::class, 'post', 'as' => 'service.heading.post'])->name('service.heading.post');

        Route::prefix('/{service_id}')->group(function () {
            Route::prefix('/additional-content')->group(function () {
                Route::get('/', [ServiceAdditionalContentPaginateController::class, 'get', 'as' => 'service_page.additional_content.paginate.get'])->name('service_page.additional_content.paginate.get');
                Route::post('/heading', [AdditionalContentHeadingController::class, 'post', 'as' => 'service_page.additional_content.heading.post'])->name('service_page.additional_content.heading.post');
                Route::get('/create', [ServiceAdditionalContentCreateController::class, 'get', 'as' => 'service_page.additional_content.create.get'])->name('service_page.additional_content.create.get');
                Route::post('/create', [ServiceAdditionalContentCreateController::class, 'post', 'as' => 'service_page.additional_content.create.post'])->name('service_page.additional_content.create.post');
                Route::get('/update/{id}', [ServiceAdditionalContentUpdateController::class, 'get', 'as' => 'service_page.additional_content.update.get'])->name('service_page.additional_content.update.get');
                Route::post('/update/{id}', [ServiceAdditionalContentUpdateController::class, 'post', 'as' => 'service_page.additional_content.update.post'])->name('service_page.additional_content.update.post');
                Route::get('/delete/{id}', [ServiceAdditionalContentDeleteController::class, 'get', 'as' => 'service_page.additional_content.delete.get'])->name('service_page.additional_content.delete.get');
                Route::prefix('/{service_content_id}/image')->group(function () {
                    Route::get('/', [AdditionalContentImagePaginateController::class, 'get', 'as' => 'service_page.additional_content_image.paginate.get'])->name('service_page.additional_content_image.paginate.get');
                    Route::post('/create', [AdditionalContentImageCreateController::class, 'post', 'as' => 'service_page.additional_content_image.create.post'])->name('service_page.additional_content_image.create.post');
                    Route::get('/delete/{id}', [AdditionalContentImageDeleteController::class, 'get', 'as' => 'service_page.additional_content_image.delete.get'])->name('service_page.additional_content_image.delete.get');
                });
            });

            Route::prefix('/additional-service')->group(function () {
                Route::get('/', [AdditionalServicePaginateController::class, 'get', 'as' => 'service_page.additional_service.paginate.get'])->name('service_page.additional_service.paginate.get');
                Route::post('/heading', [AdditionalServiceHeadingController::class, 'post', 'as' => 'service_page.additional_service.heading.post'])->name('service_page.additional_service.heading.post');
                Route::get('/create', [AdditionalServiceCreateController::class, 'get', 'as' => 'service_page.additional_service.create.get'])->name('service_page.additional_service.create.get');
                Route::post('/create', [AdditionalServiceCreateController::class, 'post', 'as' => 'service_page.additional_service.create.post'])->name('service_page.additional_service.create.post');
                Route::get('/update/{id}', [AdditionalServiceUpdateController::class, 'get', 'as' => 'service_page.additional_service.update.get'])->name('service_page.additional_service.update.get');
                Route::post('/update/{id}', [AdditionalServiceUpdateController::class, 'post', 'as' => 'service_page.additional_service.update.post'])->name('service_page.additional_service.update.post');
                Route::get('/delete/{id}', [AdditionalServiceDeleteController::class, 'get', 'as' => 'service_page.additional_service.delete.get'])->name('service_page.additional_service.delete.get');
                Route::prefix('/{additional_service_id}/additional-service-content')->group(function () {
                    Route::get('/', [AdditionalServiceContentPaginateController::class, 'get', 'as' => 'service_page.additional_service_content.paginate.get'])->name('service_page.additional_service_content.paginate.get');
                    Route::get('/create', [AdditionalServiceContentCreateController::class, 'get', 'as' => 'service_page.additional_service_content.create.get'])->name('service_page.additional_service_content.create.get');
                    Route::post('/create', [AdditionalServiceContentCreateController::class, 'post', 'as' => 'service_page.additional_service_content.create.post'])->name('service_page.additional_service_content.create.post');
                    Route::get('/update/{id}', [AdditionalServiceContentUpdateController::class, 'get', 'as' => 'service_page.additional_service_content.update.get'])->name('service_page.additional_service_content.update.get');
                    Route::post('/update/{id}', [AdditionalServiceContentUpdateController::class, 'post', 'as' => 'service_page.additional_service_content.update.post'])->name('service_page.additional_service_content.update.post');
                    Route::get('/delete/{id}', [AdditionalServiceContentDeleteController::class, 'get', 'as' => 'service_page.additional_service_content.delete.get'])->name('service_page.additional_service_content.delete.get');
                    Route::prefix('/{additional_service_content_id}/image')->group(function () {
                        Route::get('/', [AdditionalServiceContentImagePaginateController::class, 'get', 'as' => 'service_page.additional_service_content_image.paginate.get'])->name('service_page.additional_service_content_image.paginate.get');
                        Route::post('/create', [AdditionalServiceContentImageCreateController::class, 'post', 'as' => 'service_page.additional_service_content_image.create.post'])->name('service_page.additional_service_content_image.create.post');
                        Route::get('/delete/{id}', [AdditionalServiceContentImageDeleteController::class, 'get', 'as' => 'service_page.additional_service_content_image.delete.get'])->name('service_page.additional_service_content_image.delete.get');
                    });

                });

            });

        });

    });

    Route::post('/text-editor-image', [TextEditorImageController::class, 'post', 'as' => 'texteditor_image.post'])->name('texteditor_image.post');
    Route::get('/logout', [LogoutController::class, 'get', 'as' => 'logout.get'])->name('logout.get');

});
