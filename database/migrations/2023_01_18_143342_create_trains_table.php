<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 60);
            $table->string('departure_station', 80);
            $table->string('arrival_staion', 80);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 20);
            $table->unsignedTinyInteger('wagons');
            $table->boolean('is_in_time')->default(true);  //dentro default si può indicare rispettivamente true o false con 1 e 0 
            $table->boolean('is_cancelled')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
