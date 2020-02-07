<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable=[
        'author','title','description','cover_image','url','metahtml','status',
    ];
    public function comment(){
        return  $this->hasMany(Roadmapcomment::class);
    }
     public function view(){
        return  $this->hasMany(Useractivity::class);
    }
}
