<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('des')->nullable();
            $table->string('photo');
            $table->string('bn_name')->nullable();
            $table->text('bn_des')->nullable();
          
           
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
        Schema::dropIfExists('reviewers');
    }
}
