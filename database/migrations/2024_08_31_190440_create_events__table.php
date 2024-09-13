<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateEventsTable extends Migration
{
   
    public function up()
    {
        Schema::create('events_', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->integer('max_attendees');
            $table->timestamps();
        });
    }
           
    
     public function down()
    {
        Schema::dropIfExists('events');
    }
}
