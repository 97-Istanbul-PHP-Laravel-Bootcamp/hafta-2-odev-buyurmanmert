<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('product_category_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->longText('product_description');
            $table->bigInteger('product_price');
            $table->integer('product_stok');
            $table->tinyInteger('product_showcase');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('product_brand');
            $table->foreign('product_category_id')
                  ->references('category_id')
                  ->on('categories');
            $table->timestamps();

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
}
