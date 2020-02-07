<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentreply extends Model
{
    protected $fillable=[
        'roadmapcomment_id','comment'
    ];
}
