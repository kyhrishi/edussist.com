<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyProffesionalDetailsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_proffesional_details', function (Blueprint $table) {
            $table->bigInteger('faculty_id');
            $table->string('organization');
            $table->enum('organization_type', ['ACADEMY', 'INDUSTRY']);
            $table->enum('job_type', ['FULL TIME', 'PART TIME', 'VISITING']);
            $table->date('start');
            $table->date('end');         
            $table->float('salary');
            $table->string('remarks');
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
        Schema::drop('faculty_proffesional_details');
    }
}
