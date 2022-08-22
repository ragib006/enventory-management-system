<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlippersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slippers', function (Blueprint $table) {

          $table->increments('id');
          $table->string('name');
          $table->string('email');
          $table->string('phone');
          $table->string('address');
          $table->string('type');
          $table->string('photo');
          $table->string('shop_name');
          $table->string('bank_name');
          $table->string('account_name');
          $table->string('account_number');
          $table->string('branch_name');
          $table->string('city');



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
        Schema::dropIfExists('slippers');
    }
}
