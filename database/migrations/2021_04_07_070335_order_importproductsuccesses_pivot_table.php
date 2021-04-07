<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderImportproductsuccessesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_importproductsuccesses', function (Blueprint $table) {
            $table->foreignId('id_order')->references('id')->on('orders')->cascadeOnDelete();
            $table->foreignId('id_importproductsuccesses')->references('id')->on('importproductsuccesses')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_importproductsuccesses');
    }
}
