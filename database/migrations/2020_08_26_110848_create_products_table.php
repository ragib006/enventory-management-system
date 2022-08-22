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
          $table->string('product_name');
          $table->integer('cat_id');
          $table->integer('slipper_id');
          $table->string('product_code');
          $table->string('product_status');
          $table->string('product_image');
          $table->string('product_buy_date');
          $table->string('product_url');
          $table->string('product_expire_date');
          $table->string('buying_price');
          $table->string('selling_price');


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
