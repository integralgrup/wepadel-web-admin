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
        Schema::create('club_slider_1', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->integer('slider_id')->nullable(false);
            $table->integer('club_id')->nullable(false);
            $table->string('lang', 10)->nullable(false);
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('icon')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('alt')->nullable(false);
            $table->string('video')->nullable(false);
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
        Schema::dropIfExists('club_slider_1');
    }
};
