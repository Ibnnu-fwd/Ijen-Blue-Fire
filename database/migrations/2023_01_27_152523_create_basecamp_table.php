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
        Schema::create('basecamp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('park_quota');
            $table->integer('motocycle_price')->nullable();
            $table->integer('car_price')->nullable();
            $table->foreignId('tour_id')->references('id')->on('tours');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('basecamp');
    }
};
