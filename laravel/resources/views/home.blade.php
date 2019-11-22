@extends('layouts.app')

@section('content')


<head>
    <title>Neit's catalogue</title>
    <link rel="stylesheet" href="../css/catalogue.css">

</head>

<body>
    <main>
        <div>
            <h2 id="title">Produits</h2>
        </div>
        <div id="produits">
        @foreach($name as $data)

        @if ($data -> stock == 0)
            <div class="produit_oos" >
                
            <a href="{{ url('produit/'.$data -> id_produit) }}">
                    <p class="nomproduit">{{ $data -> titre}}</p>
                    
                    <img src="../img/{{ $data -> image}}" class="image_oos" alt="{{ $data -> image}}" width="100%" height="200%">
                    <img src="../img/out_of_stock.jpg" class="oos">

                    @else
                    
            <div class="produit">
                
            <a href="{{ url('produit/'.$data -> id_produit) }}">
                    <p class="nomproduit">{{ $data -> titre}}</p>
                    
                    <img src="../img/{{ $data -> image}}" class="image" alt="{{ $data -> image}}" width="100%" height="200%">
                    @endif

                </a>
                <div class="prix">
                <p>{{ $data -> prix}} €</p>
                </div>
                <div class="categorie">
                    <p>{{ $data -> categorie}}</p>
                </div>
                <button class="bouton" type="button">Ajouter au panier</button>
            </div>
            @endforeach
            <div class="top">
                <a class="comeback" href="#">Revenir en haut de la page</a>
            </div>
           
        </div>

    </main>

</body>


@endsection
