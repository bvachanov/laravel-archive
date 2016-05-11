<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('account_type')->unsigned();
            $table->foreign('account_type')->references('number')
                    ->on('account_types');
            $table->string('academic_title');
            $table->integer('faculty_number');
            $table->string('first_name');            
            $table->string('last_name');
            $table->integer('year')->nullable();
            $table->string('course_of_studies')->nullable();
            $table->boolean('is_bachelor');
            $table->integer('group_number');
            //course_of_studies table pri accounts, tablica s grupite, bachelor/master
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
