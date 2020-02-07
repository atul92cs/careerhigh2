<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable=[
        'title','cover_image','cover_image1','description','status',
    ];
}
