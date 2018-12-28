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
            $table->string('name')->nulable();
            $table->string('code')->nulable();
            $table->integer('cate_id')->nulable();
            $table->integer('manufacturer_id')->nulable();
            $table->integer('qty_total')->nulable();
            $table->integer('price')->nulable();
            $table->integer('price_sale')->nulable();
            $table->integer('properties_id')->nulable();
            $table->integer('user_id')->nulable();
            $table->enum('status', array('active', 'inActive'))->default('active');
            $table->text('note')->nulable();
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
