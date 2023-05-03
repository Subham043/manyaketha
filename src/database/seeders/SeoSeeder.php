<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Modules\Seo\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //seo for main pages

        Seo::create([
            'page_name' => 'Home Page',
            'slug' => 'home-page',
        ]);

        Seo::create([
            'page_name' => 'About Page',
            'slug' => 'about-page',
        ]);

        Seo::create([
            'page_name' => 'Service Page',
            'slug' => 'service-page',
        ]);

        Seo::create([
            'page_name' => 'Project Page',
            'slug' => 'project-page',
        ]);

        Seo::create([
            'page_name' => 'Blog Page',
            'slug' => 'blog-page',
        ]);

        Seo::create([
            'page_name' => 'Contact Page',
            'slug' => 'contact-page',
        ]);

    }
}
