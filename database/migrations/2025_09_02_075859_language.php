<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang_code', 10);
            $table->string('flag_image', 255);
            $table->string('domain', 255);
            $table->string('path', 255);
            $table->string('title', 100);
            $table->string('about_url', 255);
            $table->string('product_url', 255);
            $table->string('club_url', 255);
            $table->string('project_url', 255);
            $table->string('blog_url', 255);
            $table->string('contact_url', 255);
            $table->string('uploads_folder', 255);
            $table->string('images_folder', 255);
            $table->string('product_images_folder', 255);
            $table->string('club_images_folder', 255);
            $table->string('project_images_folder', 255);
            $table->string('blog_images_folder', 255);
            $table->text('ga_code')->nullable();
            $table->text('bitrix_form_code')->nullable();
            $table->text('bitrix_widget_code')->nullable();
            $table->integer('sort')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language');
    }
};
