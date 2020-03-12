<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('ORDERID');
            $table->string('TTYPE');
            $table->string('MID');
            $table->string('TXNID');
            $table->string('TXNAMOUNT');
            $table->string('PAYMENTMODE');
            $table->string('CURRENCY');
            $table->string('TXNDATE');
            $table->string('STATUS');
            $table->string('RESPCODE');
            $table->string('RESPMSG');
            $table->string('GATEWAYNAME');
            $table->string('BANKTXNID');
            $table->string('BANKNAME');
            $table->string('CHECKSUMHASH');
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
        Schema::dropIfExists('transactions');
    }
}
