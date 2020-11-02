<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->UUID('id')->primary();
            $table->string('currency_from',3);
            $table->string('currency_to',3);
            $table->float('amount_sell');
            $table->float('amount_buy');
            $table->float('rate');
            $table->dateTime('time_placed');
            $table->string('originating_country');
            $table->bigInteger('originating_country')->unsigned();
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
        Schema::dropIfExists('exchange_rates');
    }
}
