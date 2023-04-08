<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('assessment_name')->nullable();
            $table->string('graded_by')->nullable();
            $table->string('total_marks')->nullable();
            $table->string('obtained_marks')->nullable();
            $table->longText('question_path')->nullable();
            $table->longText('student_solution_path')->nullable();
            $table->longText('graded_solution_path')->nullable();
            $table->longText('type')->nullable();
            $table->enum('status', ['active','pending', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
