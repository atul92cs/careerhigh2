<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    protected $fillable=[
        'category_id','title','description','cover_image','video','url','metahtml','status',
    ];
    public function category(){
        return  $this->belongsTo(Category::class);
    }
    public function like(){
        return  $this->hasMany(Roadmaplike::class);
    }
    public function comment(){
        return  $this->hasMany(Roadmapcomment::class);
    }
     public function view(){
        return  $this->hasMany(Useractivity::class);
    }
}

