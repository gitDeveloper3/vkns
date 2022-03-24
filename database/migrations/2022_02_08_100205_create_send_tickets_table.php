<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->string('queue');
            $table->string('topic');
            $table->string('description');
            $table->string('file')->default('location');
            $table->string('uniqueid')->unique();
            $table->string('ticketstatus')->default('open');//between 4 values only
            $table->boolean('solved')->default(false);
            $table->boolean('accepted')->default(false);
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
        Schema::dropIfExists('send_tickets');
    }
}
