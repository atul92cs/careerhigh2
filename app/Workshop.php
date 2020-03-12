<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable=[
        'location',
        'duration',
        'date',
        'date2',
        'time',
        'time2',
        'tcdesc',
        'price',
        'subs_limit',
        'domain',
        'college',
        'title',
        'description',
        'image',
        'url',
        'metahtml',
        'status',
        
    ];
    public function tabs (){
       return $this->hasMany(Workshoptab::class);
    }
}
 