<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vin', function (Blueprint $table) {
          $table->unsignedBigInteger('bl_height');
          $table->unsignedBigInteger('txid');
          $table->unsignedBigInteger('vinid');          
          $table->unsignedBigInteger('amount');
          $table->string('key_image',128);
          
          $table->primary(['bl_height', 'txid', 'vinid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vin');
    }
}
