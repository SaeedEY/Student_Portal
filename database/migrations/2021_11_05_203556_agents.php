<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Agents',function (blueprint $table){
            $table->id('Agent_ID');
            $table->string('Name',100);
            $table->string('Lastname',100);
            // $table->string('Phone',16);
            $table->string('Identity_Code');
            $table->integer('Field_ID')->unsigned();
            $table->foreign('Field_ID')->references('Field_ID')->on('Fields');
            $table->integer('role')->default(1);// Role 1 : Agent  -  Role 2 : Admin
            $table->string('Job_Title',100);


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
