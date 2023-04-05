<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->char('title', 255)->nullable(false);
            $table->char('description')->nullable(false);
            $table->integer('status')->nullable(false)->default(1);
            $table->boolean('delete_flg')->nullable()->default(0);
            $table->unsignedBigInteger('create_user_id')->nullable(false);
            $table->foreign('create_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('update_user_id')->nullable(false);
            $table->foreign('update_user_id')->references('id')->on('users');
            $table->integer('delete_user_id')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
