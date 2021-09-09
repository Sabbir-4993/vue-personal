<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_details', function (Blueprint $table) {
            $table->id();
            $table->string('education_name');
            $table->string('degree_title');
            $table->string('institute_name');
            $table->string('subject');
            $table->string('passing');
            $table->string('result');
            $table->string('duration');
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
        Schema::dropIfExists('academic_details');
    }
}
