<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoColumnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('seo_key_words')->after('note')->nullable();
            $table->longText('seo_description')->after('note')->nullable();
            $table->longText('seo_title')->after('note')->nullable();
        });
    }
    public function down()
    {
        Schema::table('web_infomations', function (Blueprint $table) {
            $table->dropColumn(['seo_key_words', 'seo_description', 'seo_title']);
        });
    }
}
