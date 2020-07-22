<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Farmaco extends Model{

    /*Ignora o campos de data*/
    public $timestamps = false;
    /*Por enquanto aceita todos os dados inseridos*/
    protected $guarded = [];
    /*Indica que esse model pertence a esta tabela*/
    protected $table = 'tbl_farmacos';
}
