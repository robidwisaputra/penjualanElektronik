<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buying', function (Blueprint $table) {
            $table->string('id_buying');
            $table->string('date');
            $table->integer('id_employee');
            $table->integer('id_supplier');
            $table->integer('id_product');
            $table->integer('quantity');
            $table->bigInteger('total');
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
        Schema::dropIfExists('buying');
    }
}
