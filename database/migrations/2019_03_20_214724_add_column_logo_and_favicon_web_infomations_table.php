<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLogoAndFaviconWebinfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_infomations', function (Blueprint $table) {
            $table->string('favicon_url')->after('instagram')->nullable();
            $table->string('logo_url')->after('instagram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_infomations', function (Blueprint $table) {
            $table->dropColumn(['favicon_url', 'logo_url']);
        });
    }
}
