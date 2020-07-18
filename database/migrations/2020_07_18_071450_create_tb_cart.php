<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cart', function (Blueprint $table) {
            $table->id('cid');
            $table->integer('pid');
            $table->integer('uid');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('pid')->references('id')->on('tb_product');
            $table->foreign('uid')->references('id')->on('tb_user_register');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cart');
    }
}
