<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaSellsItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sell')->unsigned();  
            $table->integer('id_product')->unsigned();    
            $table->float('price');
            $table->integer('quantity');
            $table->timestamps();//campo obligatorio

            $table->foreign('id_sell')->references('id')->on('sells');
            $table->foreign('id_product')->references('id')->on('products');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sells_items');
    }
}
