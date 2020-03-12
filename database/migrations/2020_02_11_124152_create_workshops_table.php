<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('location')->nullable();;
            $table->string('duration')->nullable();;
            $table->string('date')->nullable();
            $table->string('date2')->nullable();
            $table->string('time')->nullable();
            $table->string('time2')->nullable();
            $table->string('tcdesc')->nullable();
            $table->string('price')->nullable();
            $table->string('subs_limit')->nullable();
            $table->string('domain')->nullable();
            $table->string('college')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('metahtml')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('workshops');
    }
}
