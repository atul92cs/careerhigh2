<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmaplike extends Model
{
    protected $fillable=[
        'roadmap_id','user_id','title',
    ];
     public function user(){
        return  $this->belongsTo(User::class);
    }
}
