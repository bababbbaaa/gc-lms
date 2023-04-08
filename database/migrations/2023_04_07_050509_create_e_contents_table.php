<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_contents', function (Blueprint $table) {
            $table->id();
            $table->string('content_name')->nullable();
            $table->string('content_type')->nullable();
            $table->string('uploaded_by')->nullable();
            $table->string('no_of_views')->nullable();
            $table->string('content_path')->nullable();
            $table->string('sector_id')->nullable();
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
        Schema::dropIfExists('e_contents');
    }
}
