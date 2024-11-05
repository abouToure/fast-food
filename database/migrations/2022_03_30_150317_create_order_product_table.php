<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',8,2);
            $table->string('quantity');
            $table->foreignId('product_id');
            $table->foreignId('order_id');
            
            $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};
