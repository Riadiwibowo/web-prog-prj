<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactiondetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactiondetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->references('id')->on('transaction');;
            $table->foreignId('furniture_id')->references('id')->on('furnitures');;
            $table->integer('totalqty');
            $table->integer('totalprice');
            $table->string('method');
            $table->integer('card_number');
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
        Schema::dropIfExists('transactiondetail');
    }
}
