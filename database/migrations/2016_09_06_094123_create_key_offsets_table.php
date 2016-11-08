<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyOffsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_offsets', function (Blueprint $table) {
          $table->unsignedBigInteger('bl_height');
          $table->unsignedBigInteger('txid');
          $table->unsignedBigInteger('vinid');          
          $table->unsignedBigInteger('offsetid');
          $table->unsignedBigInteger('offset_value');
          
          $table->primary(['bl_height', 'txid', 'vinid', 'offsetid']);
          $table->index('offset_value');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('key_offsets');
    }
}
