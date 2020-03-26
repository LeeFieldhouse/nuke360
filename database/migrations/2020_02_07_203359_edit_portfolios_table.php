<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function(Blueprint $table) {
			$table->text('meta_description')->nullable()->change();
			$table->string('title')->nullable()->change();
			$table->string('slug')->nullable()->change();
			$table->string('subtitle')->nullable()->change();
			$table->text('summary')->nullable()->change();
			$table->text('case_study')->nullable()->change();
			$table->text('result')->nullable()->change();
			$table->text('experience')->nullable()->change();
			$table->unsignedBigInteger('bedroom_range_id')->nullable();
			$table->unsignedBigInteger('kitchen_range_id')->nullable();
			$table->unsignedBigInteger('portfolio_type_id')->nullable()->change();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('portfolios', function(Blueprint $table) {
			$table->text('meta_description')->change();
			$table->string('title')->change();
			$table->string('slug')->change();
			$table->string('subtitle')->change();
			$table->text('summary')->change();
			$table->text('case_study')->change();
			$table->text('result')->change();
			$table->text('experience')->change();
			$table->dropColumn('bedroom_range_id');
			$table->dropColumn('kitchen_range_id');
			$table->unsignedBigInteger('portfolio_type_id')->change();
		});
    }
}
