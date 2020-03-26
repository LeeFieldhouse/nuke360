<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('title');
            $table->string('slug');
            $table->text('summary');
            $table->text('content');
            $table->dateTime('published_at');
            $table->string('featured_image_thumb');
            $table->string('featured_image');
            $table->string('featured_image_alt');
            $table->unsignedBigInteger('author_id');
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
        Schema::dropIfExists('news');
    }
}
