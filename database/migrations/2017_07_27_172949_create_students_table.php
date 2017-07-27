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
            $table->integer('age');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('nacionality');
            $table->string('civilStatus');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->integer('institution_id');
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
