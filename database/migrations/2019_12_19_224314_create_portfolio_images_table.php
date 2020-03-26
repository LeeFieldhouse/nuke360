<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('image_thumb')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->unsignedBigInteger('portfolio_type_id')->nullable();
            $table->unsignedBigInteger('portfolio_id')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_images');
    }
}
