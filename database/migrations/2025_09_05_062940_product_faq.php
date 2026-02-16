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
        Schema::create('product_faq', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('question_id');
            $table->string('lang', 10);
            $table->string('title', 255);
            $table->text('description');
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
        Schema::dropIfExists('product_faq');
    }
};
