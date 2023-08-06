<?php

use App\Modules\Main\AboutPage\AboutPageController;
use App\Modules\Main\AwardPage\AwardPageController;
use App\Modules\Main\BlogPage\BlogDetailPageController;
use App\Modules\Main\BlogPage\BlogPageController;
use App\Modules\Main\CampaignPage\CampaignPageController;
use App\Modules\Main\ContactPage\ContactPageController;
use App\Modules\Main\CsrPage\CsrPageController;
use App\Modules\Main\HomePage\HomePageController;
use App\Modules\Main\LegalPage\LegalPageController;
use App\Modules\Main\ProjectPage\ProjectPageController;
use App\Modules\Main\ServicePage\AdditionalServiceDetailPageController;
use App\Modules\Main\ServicePage\ServiceDetailPageController;
use App\Modules\Main\ServicePage\ServicePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'get', 'as' => 'home_page.get'])->name('home_page.get');
Route::get('/about-us', [AboutPageController::class, 'get', 'as' => 'about_page.get'])->name('about_page.get');
Route::get('/csr', [CsrPageController::class, 'get', 'as' => 'csr_page.get'])->name('csr_page.get');
Route::get('/awards', [AwardPageController::class, 'get', 'as' => 'awards_page.get'])->name('awards_page.get');
Route::get('/contact-us', [ContactPageController::class, 'get', 'as' => 'contact_page.get'])->name('contact_page.get');
Route::post('/contact-us-post', [ContactPageController::class, 'post', 'as' => 'contact_page.post'])->name('contact_page.post');
Route::get('/projects', [ProjectPageController::class, 'get', 'as' => 'projects.get'])->name('projects.get');
Route::get('/services', [ServicePageController::class, 'get', 'as' => 'services.get'])->name('services.get');
Route::get('/services/{slug}', [ServiceDetailPageController::class, 'get', 'as' => 'services_detail.get'])->name('services_detail.get');
Route::get('/services/{service_slug}/{slug}', [AdditionalServiceDetailPageController::class, 'get', 'as' => 'additional_services_detail.get'])->name('additional_services_detail.get');
Route::get('/blogs', [BlogPageController::class, 'get', 'as' => 'blogs.get'])->name('blogs.get');
Route::post('/campaign-enquiry-post', [CampaignPageController::class, 'post', 'as' => 'campaign_detail.post'])->name('campaign_detail.post');
Route::get('/blogs/{slug}', [BlogDetailPageController::class, 'get', 'as' => 'blogs_detail.get'])->name('blogs_detail.get');
Route::get('/campaign/{slug}', [CampaignPageController::class, 'get', 'as' => 'campaign_detail.get'])->name('campaign_detail.get');
Route::get('/{legal_slug}', [LegalPageController::class, 'get', 'as' => 'legal.get'])->name('legal.get');
