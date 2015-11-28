<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyQualificationTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_qualification', function (Blueprint $table) {
            $table->bigInteger('faculty_id');
            $table->string('course');
            $table->string('type');
            $table->string('institute');
            $table->string('university');
            $table->date('start');
            $table->date('end');         
            $table->float('score');
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
        //
        Schema::drop('faculty_qualification');
    }
}
