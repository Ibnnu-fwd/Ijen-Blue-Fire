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
        Schema::create('detail_transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->references('id')->on('transaction');
            $table->string('transaction_code')->unique();
            $table->date('transaction_date');
            $table->integer('vehicle_count');
            $table->foreignId('basecamp_id')->references('id')->on('basecamp');
            $table->integer('total_parking_pay');
            $table->integer('total_visitor_pay');
            $table->integer('status'); // 0 pending, 1 success, 2 failed
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
        Schema::dropIfExists('detail_transaction');
    }
};
