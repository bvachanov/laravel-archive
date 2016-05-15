<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AcademicGroups extends Migration
{
   public function up()
    {
        Schema::create('academic_groups', function (Blueprint $table) {
            //nomer na grupata, godina, specialnost
            $table->increments('id');          
            $table->integer('group_number');
            $table->integer('year');
            $table->integer('course_of_studies')->unsigned();
             $table->foreign('course_of_studies')->references('id')
                    ->on('course_of_studies');
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
        Schema::drop('academic_groups');
    }
}
