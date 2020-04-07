<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('task_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('tweet_id')->comment('TweetID');
            $table->unsignedBigInteger('account_id')->comment('TwitterUserID');
            $table->timestamp('unfavorited_at')->nullable()->comment('favorite解除日時');
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
        Schema::dropIfExists('favorites');
    }
}
