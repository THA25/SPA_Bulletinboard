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
            $table->id();
            $table->char('name')->nullable(false)->unique();
            $table->char('email')->nullable(false)->unique();
            $table->text('password')->nullable(false);
            $table->char('profile', 255)->nullable(false);
            $table->char('type', 1)->nullable(false)->default(1);
            $table->char('phone', 20)->nullable();
            $table->char('address', 255)->nullable();
            $table->date('dob')->nullable();
            $table->integer('create_user_id')->nullable(false);
            $table->integer('update_user_id')->nullable(false);
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
        Schema::dropIfExists('users');
    }
}
