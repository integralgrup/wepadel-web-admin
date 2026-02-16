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
        Schema::create('about_slider', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->integer('slider_id')->nullable(false);
            $table->string('lang', 10)->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('alt')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->integer('sort')->default(0);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_slider');
    }
};
