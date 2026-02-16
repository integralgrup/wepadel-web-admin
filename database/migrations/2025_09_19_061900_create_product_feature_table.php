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
        Schema::create('product_feature', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->integer('feature_id')->nullable(false);
            $table->integer('product_id')->nullable(false);
            $table->string('lang', 10)->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('description')->nullable(false);
            $table->string('left')->nullable(false);
            $table->string('top')->nullable(false);
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
        Schema::dropIfExists('product_feature');
    }
};
