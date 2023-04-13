<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('icon')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->string('keyword')->nullable();
            $table->integer('active')->default(1);  

            $table->integer('parent')->unsigned()->nullable();        
            $table->foreign('parent')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('attribute_family_id')->unsigned()->nullable();
            $table->foreign('attribute_family_id')->references('id')->on('attribute_families')->onDelete('restrict');

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
        Schema::dropIfExists('categories');
    }
}
