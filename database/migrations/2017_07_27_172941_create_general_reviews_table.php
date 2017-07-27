<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course');
            $table->integer('institution_id');
            $table->integer('student_id');
            $table->string('suggestion');
            $table->integer('rate');
            $table->string('pros');
            $table->string('cons');
            $table->string('description');
            $table->double('payment');
            $table->integer('startYear');
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
        Schema::dropIfExists('general_reviews');
    }
}
