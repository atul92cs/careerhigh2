<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbookmark extends Model
{
    protected $fillable=[
        'roadmap_id','user_id','title',
    ];
     public function user(){
        return  $this->belongsTo(User::class);
    } 
    public function roadmap(){
        return  $this->belongsTo(Roadmap::class);
    }
}
