<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id')->index()->comment('TwitterUserID');
            $table->string('name', 50)->comment('アカウント名');
            $table->string('screen_name', 50)->comment('表示名');
            $table->string('avatar_path', 256)->comment('アバターパス');
            $table->string('access_token', 255)->comment('アクセストークン');
            $table->string('access_token_secret', 255)->comment('アクセストークンシークレット');
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
