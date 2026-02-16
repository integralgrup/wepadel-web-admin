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
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 50)->notNull();
            $table->integer('country_id')->notNull();
            $table->integer('continent_id')->notNull();
            $table->string('code', 10)->notNull();
            $table->string('title', 100)->notNull();
            $table->string('left', 50)->notNull();
            $table->string('top', 50)->notNull();
            $table->integer('sort')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country');
    }
};
