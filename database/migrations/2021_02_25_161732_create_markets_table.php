<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('rate');
            $table->string('address');
            $table->string('description');
            $table->string('phone');
            $table->string('mobile');
            $table->string('information');
            $table->double('deliveryFee', 15, 8);
            $table->double('adminCommission', 15, 8);
            $table->double('defaultTax', 15, 8);
            $table->double('column', 15, 8);
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('closed');
            $table->boolean('availableForDelivery');
            $table->double('deliveryRange', 15, 8);
            $table->double('distance', 15, 8);
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
        Schema::dropIfExists('markets');
    }
}
