<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('identity_marks')->nullable();
            $table->char('blood_group', 4);
            $table->date('date_of_birth');
            $table->string('education');
            $table->string('occupation');
            $table->boolean('gender')->nullable();
            $table->boolean('is_verified')->default(0);
            $table->foreignId('user_id');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('updated_by')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
