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
        Schema::create('about_certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('content_id');
            $table->string('lang', 10);
            $table->string('title', 100);
            $table->string('image', 255);
            $table->string('pdf', 255);
            $table->string('alt', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->integer('sort')->default(0);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_certificates');
    }
};
