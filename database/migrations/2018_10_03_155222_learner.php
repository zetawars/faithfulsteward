<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Learner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learner', function (Blueprint $table) {
       
            $table->increments('ID');
            $table->integer('UserID')->unsigned();
            $table->foreign('UserID')->references('ID')->on('user');
            $table->rememberToken(); 
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
        Schema::dropIfExists('learner');
    }
}
