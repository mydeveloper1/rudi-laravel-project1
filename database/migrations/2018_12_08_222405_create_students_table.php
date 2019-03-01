<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->integer('student_id')->unsigned()->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('class')->unsigned();
            $table->string('gender', 1);
            $table->text('biography');
            $table->date('birthday');
            $table->integer('school_id')->unsigned();
            $table->integer('father_id')->unsigned()->nullable();
            $table->integer('mother_id')->unsigned()->nullable();
            $table->boolean('at_risk')->default(0);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('students');
    }
}
