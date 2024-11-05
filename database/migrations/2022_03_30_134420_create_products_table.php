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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->decimal('price',10,2)->nullable();
            $table->text('description')->nullable();
            // $table->string('category',50);

            // $table->foreignId('shop_id');
             $table->foreignId('category_id');
            $table->string('poster_url',255);
            $table->timestamps();

            // $table->foreign('shop_id')->references('id')->on('shops')
            // ->onDelete('restrict')->onUpdate('cascade');
            
             $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('products');
    }
};
