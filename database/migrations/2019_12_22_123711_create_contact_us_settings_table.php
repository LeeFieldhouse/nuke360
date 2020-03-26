<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_form_email');
            $table->text('google_map_iframe');
            $table->text('content');
            $table->string('phone');
            $table->text('address');
            $table->string('email');
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
        Schema::dropIfExists('contact_us_settings');
    }
}
