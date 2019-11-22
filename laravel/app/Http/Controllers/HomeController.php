<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use App\Model\Panier;
use App\User;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function index()
{
$select = DB::select('select * from produit');

return view('home')->with('name',$select);
}
}