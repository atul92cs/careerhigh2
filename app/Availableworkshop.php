<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availableworkshop extends Model
{
    protected $fillable =[  
        'title',  'description',  'image',  'url',  'metahtml',  'status',
    ];
}
