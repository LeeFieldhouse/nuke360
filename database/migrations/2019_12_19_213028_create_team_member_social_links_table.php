<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMemberSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_member_social_links', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('class');
			$table->string('url');
			$table->smallInteger('order');
			$table->unsignedBigInteger('team_member_id');
			$table->foreign('team_member_id')->references('id')->on('team_members')->onDelete('cascade');
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
        Schema::dropIfExists('team_member_social_links');
    }
}
