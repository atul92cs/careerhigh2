<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('collegename');
            $table->string('name');
            $table->string('specialization')->nullable();
            $table->string('workshop')->nullable();
            $table->string('owning')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('city');
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
        Schema::dropIfExists('workshop_contacts');
    }
}
