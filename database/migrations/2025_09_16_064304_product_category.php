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
        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_category_id')->nullable();
            $table->integer('category_id');
            $table->string('lang', 10);
            $table->string('title', 255);
            $table->string('seo_url', 255)->unique();
            $table->string('seo_title', 255);
            $table->string('seo_description', 255);
            $table->string('seo_keywords', 255);
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('product_category');
    }
};
