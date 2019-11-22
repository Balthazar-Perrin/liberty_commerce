<?php

namespace App\Http\Controllers;
use App\Model\produit;
use App\Model\panier;

use Illuminate\Http\Request;
use DB;

class VenteController extends Controller
{
    public function produit($index)
    {   
        $select = DB::select('select * from produit');
        return view('produit')->with('name',$select)->with('produit', $index);
    }

    public function stock_change($produit)
    {
        $nouveau_stock = request('stock_change');
        $index=$produit;
        DB::update('UPDATE produit SET stock = ? WHERE id_produit = ?', [ $nouveau_stock , $index]);
        $select = DB::select('select * from produit');
        return view('produit')->with('name',$select)->with('produit', $index);
    }

    public function panier()
    {   
        return view('panier');
    }

    public function add_to_panier($id_produit)
    {        
        $panier = new \App\Model\panier();
        $panier->produit_id = $id_produit;
        $panier->save();

        $paniers = \App\Model\panier::with('produit')->get();
        return view('panier')->with('panier', $paniers);
            
    }
}
