<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\produit;

class AdminController extends Controller
{
        public function admin()
        {
            if ( \Auth::check() && \Auth::user()->admin)
            {
                return view("admin");
            }
    
            else
            return redirect('/');
        }
    
    protected function new_produit(request $request)
    {

        $produit = new \App\Model\produit();
            $produit->titre = request('titre');             
            $produit->categorie = request('categorie');
            $produit->stock = request('stock');
            $produit->prix = request('prix');
            $produit->description = request('description');        

            $this->validate($request, ['image' =>'required|image|mimes:jpg,png,jpeg,gif|max:2048']);
            $picture = request('image');
            $nom = request('titre').'.'.$picture -> getClientOriginalExtension();
            $picture->move(public_path('img'), $nom);
            $produit->image = $nom;
            
            $produit->save();

        return view('admin');
    }

}
    