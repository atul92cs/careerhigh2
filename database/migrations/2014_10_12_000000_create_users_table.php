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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('isug')->nullable();
            $table->string('ugyear')->nullable();
            $table->string('specialug')->nullable();
            $table->string('collegeug')->nullable();
            $table->string('ispg')->nullable();
            $table->string('pgyear')->nullable();
            $table->string('specialpg')->nullable();
            $table->string('collegepg')->nullable();
            $table->string('isworking')->nullable();
            $table->string('company')->nullable();
            $table->string('interest')->nullable();
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
