<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 100);
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('product_categories');
            $table->text('description');
            $table->double('unit_price');
            $table->float('promotion_price');
            $table->string('image',200);
            $table->string('unit',200);
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
