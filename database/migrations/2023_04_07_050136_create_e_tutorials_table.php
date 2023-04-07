<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateETutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('tutorial_name')->nullable();
            $table->string('tutorial_type')->nullable();
            $table->string('uploaded_by')->nullable();
            $table->string('no_of_views')->nullable();
            $table->string('tutorial_path')->nullable();
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
        Schema::dropIfExists('e_tutorials');
    }
}
