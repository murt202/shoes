<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbOrderedProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ordered_products', function (Blueprint $table) {
            $table->id('id');
            $table->integer('pid');
            $table->integer('quantity');
            $table->integer('uid');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
        Schema::dropIfExists('tb_ordered_products');
    }
}
