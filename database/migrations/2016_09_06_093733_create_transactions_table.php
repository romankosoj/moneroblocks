<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
          $table->unsignedBigInteger('bl_height');
          $table->unsignedBigInteger('txid');
          $table->string('hash',64);
          $table->unsignedInteger('version');
          $table->unsignedBigInteger('unlock_time');
          $table->unsignedSmallInteger('input_count');
          $table->unsignedSmallInteger('output_count');
          $table->unsignedTinyInteger('coinbase_tx');
          $table->unsignedInteger('tx_size');
          $table->string('payment_id',128)->nullable();
          $table->unsignedBigInteger('amount');
          $table->unsignedBigInteger('fee');
          $table->unsignedInteger('mixin');
          
          $table->primary(['bl_height', 'txid']);
          $table->index('hash');
          $table->index('payment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
