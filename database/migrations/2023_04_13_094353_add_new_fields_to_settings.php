<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->longtext('description_ar');
            $table->longtext('message_ar');
            $table->longtext('message_en');
            $table->longtext('vision_ar');
            $table->longtext('vision_en');
            $table->longtext('values_ar');
            $table->longtext('values_en');
            $table->longtext('team_experinces_ar');
            $table->longtext('team_experinces_en');
            $table->string('location_ar')->nullable();
            $table->string('location_en')->nullable();

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
