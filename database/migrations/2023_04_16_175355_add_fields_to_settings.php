<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('logo2')->nullable();
            $table->string('video')->nullable();
            $table->string('number_of_beneficiaries')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->string('number_of_projects')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
