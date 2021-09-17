<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Room', function (Blueprint $table) {
            $table->id();
            $table->string('roomNumber', 100)->nullable;
            $table->string('roomName', 100)->nullable;
            $table->string('yourName', 100)->nullable;
            $table->string('yourAddress', 100)->nullable;
            $table->date('Date')->nullable;
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
        Schema::dropIfExists('Room');
    }
}
