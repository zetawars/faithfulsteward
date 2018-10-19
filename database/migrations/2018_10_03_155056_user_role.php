<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('user_role', function (Blueprint $table) {
  
            $table->increments('ID');
            $table->integer('UserID')->unsigned();
            $table->integer('RoleID')->unsigned();
            $table->foreign('UserID')->references('ID')->on('user')->onDelete('cascade');
            $table->foreign('RoleID')->references('ID')->on('role')->onDelete('cascade');
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
        Schema::dropIfExists('user_role');
    }
}
