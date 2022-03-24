<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOmbudsmanQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ombudsman_queue', function (Blueprint $table) {
            $table->id();
            $table->string('FK_uniqueid');
            $table->foreign('FK_uniqueid')->references('uniqueid')->on('send_tickets');
            $table->string('category');
            $table->string('office');
            $table->string('notes')->default('null');
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
        Schema::dropIfExists('ombudsman_queue');
    }
}
