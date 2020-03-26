<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle');
            $table->text('summary');
            $table->text('case_study');
            $table->text('result');
            $table->text('experience');
            $table->string('customer')->nullable();
			$table->string('featured_image');
			$table->string('featured_image_thumb')->nullable();
			$table->string('featured_image_alt')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->date('completed_date')->nullable();
            $table->unsignedBigInteger('portfolio_type_id');
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
        Schema::dropIfExists('portfolios');
    }
}
