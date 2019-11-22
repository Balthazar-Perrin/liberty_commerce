@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <link href="../img/logosite.PNG" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/produit_panier.css">
    <meta charset="UTF-8">
    <title>Neit's produit</title>
</head>

<body id="page_produit">
    <div id="haut">
          @foreach($name as $data)
          @if ( $data -> id_produit == $produit ) 

        <h2 id="titre">{{ $data -> titre}}</h2>
        <p id="categorie">catégorie : {{ $data -> categorie}}</p>
        <p id="dispo">disponible en {{ $data-> stock}} exemplaire(s)</p>
        <p id="prix">Prix : {{ $data -> prix}} €</p>
        <a href="{{ url('add_to_panier/'.$data -> id_produit) }}"><button id="bouton" >Ajouter au panier</button></a>

     
         @if ( \Auth::check() && Auth::user()->admin )
            
            <form action="{{ route('stock_change', $produit) }}" method="POST">
            {{ csrf_field() }}
            <label for="stock_change">Modifier stock :</label>
            <input type="number" name="stock_change" id="input_change_stock" 
                    placeholder="Nouveau stock" required min="0" max="99999">
            <button type="submit" id="change_stock">Confirmer</button>
            </form> 

         @endif
    </div>

    <div>
        <img src="../img/{{ $data -> image}}" alt="img/{{ $data -> image}}" width=40% id="pic" >
    </div>
    <p id="description">{{ $data -> description}}<br></p>
           @endif
        @endforeach
</body>

</html>

@endsection
