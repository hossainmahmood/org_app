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
            $table->string('student_id');            
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone_number');
            $table->string('present_add');
            $table->string('permanent_add');
            $table->string('admission_date');
            $table->string('fee');
            $table->string('department');
            $table->string('picture')->nullable(); 
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
