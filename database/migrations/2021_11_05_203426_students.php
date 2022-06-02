<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students',function (blueprint $table){
            $table->id('Student_ID');
            $table->string('Name',100);
            $table->string('Lastname',100);
            $table->string('Phone',16);
            $table->string('Email',100);
            $table->string('Identity_Code');
            $table->integer('Field_ID')->unsigned();
            $table->foreign('Field_ID')->references('Field_ID')->on('Fields');
            $table->year('Entry_Year');


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

