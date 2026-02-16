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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->string('lang', 10);
            $table->string('title', 100);
            $table->string('seo_url', 255);
            $table->text('description');
            $table->text('technical_info');
            $table->string('slider_image', 255);
            $table->string('image', 255);
            $table->string('features_image', 255);
            $table->text('features_description');
            $table->string('pdf_file', 255);
            $table->string('alt', 255);
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->integer('sort')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
