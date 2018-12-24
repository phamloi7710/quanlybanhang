<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('is_admin')->nullable();
            $table->string('avatar')->nullable();
            $table->string('lang_code')->nullable();
            $table->enum('status', array('active', 'inActive'))->default('inActive');
            $table->rememberToken();
            $table->timestamps();






            $table->increments('id');
            $table->string('username','64')->nullable()->unique();
            $table->string('email','100')->unique();
            $table->string('password','64');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('master_password','64')->nullable();
            $table->tinyInteger('group_id')->default(0);
            $table->tinyInteger('is_root')->default(0);
            $table->string('isAdmin')->nullable();
            $table->string('avatar')->nullable();
            $table->string('lang_id')->nullable();
            $table->integer('time_expire')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
