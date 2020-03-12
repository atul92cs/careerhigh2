<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password',
        'isug',
        'ugyear',
        'specialug',
        'collegeug',
        'ispg',
        'pgyear',
        'specialpg',
        'collegepg',
        'isworking',
        'company',
        'role',
        'interest',
        'image',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function activity(){
        return $this->hasMany(Useractivity::class)->orderBy('created_at','desc');
    }
    public function bookmark(){
        return $this->hasMany(Userbookmark::class)->orderBy('created_at','desc');
    } 
    public function orders(){
        return $this->hasMany(Order::class)->orderBy('created_at','desc');
    }
   
    
    
    
}
