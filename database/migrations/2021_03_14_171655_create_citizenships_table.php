<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizenshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizenships', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('issue_district');
            $table->date('issue_date');
            $table->string('country')->default('Nepal');
            $table->string('image_back')->nullable();
            $table->string('image_front')->nullable();
            $table->foreignId('applicant_id');
            $table->timestamps();
            $table->foreign('applicant_id')->on('applicants')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizenships');
    }
}
