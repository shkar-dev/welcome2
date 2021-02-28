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
            $table->increments('id');
            $table->string('name');
            $table->double('price', 15, 8);
            $table->double('discountPrice', 15, 8);
            $table->string('image');
            $table->string('description');
            $table->string('ingredients');
            $table->string('capacity');
            $table->string('unit');
            $table->string('packageItemsCount');
            $table->boolean('featured');
            $table->boolean('deliverable');
            $table->integer('market_id')->unsigned();
            $table->foreign('market_id')->references('id')->on('markets');
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
