<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug', 250)->unique();
            $table->string('heading', 500)->unique();
            $table->text('banner_image')->nullable();
            $table->text('about_image')->nullable();
            $table->text('description')->nullable();
            $table->text('description_unfiltered')->nullable();
            $table->text('header_logo')->nullable();
            $table->text('footer_logo')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_draft')->default(0);
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_header_script')->nullable();
            $table->text('meta_footer_script')->nullable();
            $table->text('meta_header_no_script')->nullable();
            $table->text('meta_footer_no_script')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('linkedin')->nullable();
            $table->timestamps();
            $table->index(['slug', 'id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
