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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quota');
            $table->string('address')->nullable();
            $table->string('gps')->nullable();
            $table->string('phone')->nullable();
            $table->string('local_price');
            $table->string('foreign_price')->nullable();
            $table->longText('image')->nullable();
            $table->string('description')->nullable();
            $table->integer('status')->default(1); // 1: active, 0: inactive
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
        Schema::dropIfExists('tours');
    }
};
