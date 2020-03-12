<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopContact extends Model
{
    protected $fillable = ['collegename','name','specialization','workshop','owning','mobile','email','city'];
}
