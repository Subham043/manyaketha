<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class OtherPermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //permission unrelated to main app

        //permission for blogs
        Permission::create(['name' => 'edit blogs']);
        Permission::create(['name' => 'delete blogs']);
        Permission::create(['name' => 'create blogs']);
        Permission::create(['name' => 'list blogs']);

        //permission for partners
        Permission::create(['name' => 'edit partners']);
        Permission::create(['name' => 'delete partners']);
        Permission::create(['name' => 'create partners']);
        Permission::create(['name' => 'list partners']);

        //permission for counters
        Permission::create(['name' => 'edit counters']);
        Permission::create(['name' => 'delete counters']);
        Permission::create(['name' => 'create counters']);
        Permission::create(['name' => 'list counters']);

        //permission for testimonials
        Permission::create(['name' => 'edit testimonials']);
        Permission::create(['name' => 'delete testimonials']);
        Permission::create(['name' => 'create testimonials']);
        Permission::create(['name' => 'list testimonials']);

        //permission for teams
        Permission::create(['name' => 'edit teams']);
        Permission::create(['name' => 'delete teams']);
        Permission::create(['name' => 'create teams']);
        Permission::create(['name' => 'list teams']);

        //permission for home page banners
        Permission::create(['name' => 'edit home page banners']);
        Permission::create(['name' => 'delete home page banners']);
        Permission::create(['name' => 'create home page banners']);
        Permission::create(['name' => 'list home page banners']);

        //permission for home page about
        Permission::create(['name' => 'edit home page about']);

        //permission for home page additional content
        Permission::create(['name' => 'edit home page additional content']);
        Permission::create(['name' => 'delete home page additional content']);
        Permission::create(['name' => 'create home page additional content']);
        Permission::create(['name' => 'list home page additional content']);

        //permission for about page about
        Permission::create(['name' => 'edit about page about']);

        //permission for about page additional content
        Permission::create(['name' => 'edit about page additional content']);
        Permission::create(['name' => 'delete about page additional content']);
        Permission::create(['name' => 'create about page additional content']);
        Permission::create(['name' => 'list about page additional content']);


    }
}
