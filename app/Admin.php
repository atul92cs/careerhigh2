<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
//    public function amount()
//  {
//    //   return $this->hasMany(Wallet::class);
//      $credit= $this->hasMany(AdminWallet::class)->whereAmount_type(1)->sum('amount');
//      $debit=  $this->hasMany(AdminWallet::class)->whereAmount_type(0)->sum('amount');
//      return $credit-$debit;
//  }
//     public function transaction()
//  {
//      return $this->hasMany(AdminWallet::class);
//  }
}