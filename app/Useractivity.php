<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useractivity extends Model
{
    protected $fillable=[ 
        'roadmap_id','user_id', 'title','blog_id',
    ];
    
    public function roadmap(){
        return $this->belongsTo(Roadmap::class);
    }
}
