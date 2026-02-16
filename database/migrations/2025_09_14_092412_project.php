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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('lang', 10);
            $table->string('title_1', 255);
            $table->text('short_description');
            $table->string('title_2', 255);
            $table->text('description');
            $table->string('seo_url', 255);
            $table->string('image', 255);
            $table->string('alt', 255);
            $table->string('used_products', 255)->nullable();
            $table->integer('sort')->default(0);
            $table->string('seo_title', 255)->nullable();
            $table->string('seo_description', 255)->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->integer('country_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
