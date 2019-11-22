<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $table = 'produit';
    protected $primaryKey = 'id_produit';
    
    public function panier()
    {
    return $this->belongsTo('App\Model\panier');
    }

}




