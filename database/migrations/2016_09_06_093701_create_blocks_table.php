<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
          $table->unsignedBigInteger('height');
          $table->unsignedBigInteger('coins_generated');
          $table->unsignedInteger('size');
          $table->unsignedInteger('tx_count');
          $table->string('hash',64);
          $table->unsignedTinyInteger('major_version');
          $table->unsignedTinyInteger('minor_version');
          $table->unsignedBigInteger('timestamp');
          $table->string('prev_id',64);
          $table->unsignedInteger('nonce');
          $table->unsignedBigInteger('cumulative_difficulty');
          $table->unsignedBigInteger('block_difficulty');
          
          $table->primary('height');
          $table->index('hash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blocks');
    }
}
