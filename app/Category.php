<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'cover_image','title','description','url','metahtml','status',
    ];
    
    public function roadmap(){
        return $this->hasMany(Roadmap::class)->where('status',1);
    }
    
}
