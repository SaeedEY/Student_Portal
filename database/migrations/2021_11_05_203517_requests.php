<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Requests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requests',function (blueprint $table){
            $table->id('Request_ID');
            $table->dateTime('Issue_Date')->useCurrent();
            $table->dateTime('Response_Date')->nullable();
            $table->integer('Student_ID')->unsigned();
            $table->foreign('Student_ID')->references('Student_ID')->on('Students');
            $table->text('Request_Text');
            $table->text('Response_Text')->nullable();
            $table->integer('Field_ID')->unsigned();
            $table->foreign('Field_ID')->references('Field_ID')->on('Fields');
            $table->string('Status',100);
            $table->string('Title');


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
