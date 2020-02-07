<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmapcomment extends Model
{
   protected $fillable=[
        'blog_id','roadmap_id','user_id','title'
    ];
    public function user(){
        return  $this->belongsTo(User::class);
    }
    public function reply(){
        return  $this->hasMany(Commentreply::class);
    }
}
