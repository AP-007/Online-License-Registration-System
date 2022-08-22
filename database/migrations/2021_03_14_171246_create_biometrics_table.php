<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiometricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biometrics', function (Blueprint $table) {
            $table->id();
            $table->boolean('profile');
            $table->string('thumb_left');
            $table->string('thumb_right');
            $table->string('signature');
            $table->foreignId('applicant_id');
            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('applicant_id')->on('applicants')->references('id')->onDelete('cascade');
            $table->foreign('created_by')->on('applicants')->references('id')->onDelete('cascade');
            $table->foreign('updated_by')->on('applicants')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biometrics');
    }
}
