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
        Schema::create('club', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->integer('club_id')->nullable(false);
            $table->string('lang', 10)->nullable(false);
            $table->string('title', 255)->nullable(false);
            $table->string('image', 255)->nullable(false);
            $table->string('alt', 255)->nullable(false);
            $table->string('seo_url', 255)->nullable(false);
            $table->string('title_1', 255)->nullable(false);
            $table->string('title_2', 255)->nullable(false);
            $table->text('description_1')->nullable(false);
            $table->text('description_2')->nullable(false);
            $table->string('button_text', 20)->nullable(false);
            $table->string('pdf_button_text', 20)->nullable(false);
            $table->string('pdf_file', 255)->nullable(true);
            $table->string('seo_title', 255)->nullable(false);
            $table->string('seo_description', 255)->nullable(false);
            $table->string('seo_keywords', 255)->nullable(false);
            $table->integer('sort')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club');
    }
};
