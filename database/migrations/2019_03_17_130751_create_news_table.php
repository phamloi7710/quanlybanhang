<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('lang_code')->nullable();
            $table->integer('cate_id')->nullable();
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->integer('views')->default(0);
            $table->integer('order')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_key_words')->nullable();
            $table->enum('status', array('active', 'inActive'))->default('active');
            $table->enum('status_home', array('active', 'inActive'))->default('inActive');
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
        Schema::dropIfExists('news');
    }
}
