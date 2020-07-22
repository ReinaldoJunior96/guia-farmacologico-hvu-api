<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Farmaco extends Model{
    public $timestamps = false;
    //protected $fillable = [];
    protected $guarded = [];
    protected $table = 'tbl_farmacos';
}
