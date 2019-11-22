<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    protected $table = 'panier';
    protected $primaryKey = 'id_panier';

    public function produit()
    {
    return $this->hasMany('App\Model\produit');
    }

    public function user()
    {
    return $this->belongsto('App\User');
    }

}

