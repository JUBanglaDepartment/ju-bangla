<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('name',20);
            $table->string('year',4)->default('2017');
            $table->string('email',50)->unique();
            $table->string('registrationid',5)->default('00000');
            $table->string('classroll',4)->default('0000');
            $table->string('hall',2)->default('00');
            $table->softDeletes();
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
        Schema::drop('students');
    }
}
