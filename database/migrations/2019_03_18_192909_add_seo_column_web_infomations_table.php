<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoColumnWebInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_infomations', function (Blueprint $table) {
            $table->longText('seo_key_words')->after('instagram')->nullable();
            $table->longText('seo_description')->after('instagram')->nullable();
            $table->longText('seo_title')->after('instagram')->nullable();
        });
    }
    public function down()
    {
        Schema::table('web_infomations', function (Blueprint $table) {
            $table->dropColumn(['seo_key_words', 'seo_description', 'seo_title']);
        });
    }
}
