<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshoptab extends Model
{
    protected $fillable = [
        'workshop_id',
        'title',
        'description',
        'image',
        'video',
    ];
    
     public function workshop(){
       return $this->belongsTo(Workshop::class);
    }
    
}
 