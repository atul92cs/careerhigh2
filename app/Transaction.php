<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id','ORDERID','TTYPE','MID','TXNID','TXNAMOUNT','PAYMENTMODE','CURRENCY','TXNDATE','STATUS','RESPCODE','RESPMSG','GATEWAYNAME','BANKTXNID','BANKNAME','CHECKSUMHASH'];
}
