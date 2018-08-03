<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('service_id');
            $table->integer('service_provider_id');
            $table->string('name');
            $table->string('price');
            $table->string('address');
            $table->string('desc');
            $table->integer('transportation');
            $table->integer('guidance');
            $table->integer('food');
            $table->integer('laggage');
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
