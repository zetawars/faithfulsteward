<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Role extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
  
            $table->increments('ID');
            $table->string('RollName',50);
            $table->boolean('AdminDashboard')->default(false);
            $table->boolean('InstructorDashboard')->default(false);
            $table->boolean('LearnerDashboard')->default(false);
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
        Schema::dropIfExists('role');
    }
}
