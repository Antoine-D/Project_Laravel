<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    protected $fillable= ['title'];

    public $timestamps = false;
}
