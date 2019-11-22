@extends('layouts.app')

@section('content')
<head>
    <title>Neit's panier</title>
    <link rel="stylesheet" href="css/produit_panier.css" />
</head>

<body>
  <div>
    <h2 id="title">Panier</h2>
  </div>
  <div>
  <table id="tableau">
    <tr id="colonne">
      <th>Produit</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Prix total</th>
    </tr>
    <tr>
      <td>vestenoelbide</td>
      <td>150 €</td>
      <td>1</td>
      <td>150 €</td>
    </tr>
    <tr>
      <td>pantalon moche</td>
      <td>0.2 €</td>
      <td>1</td>
      <td>0.2 €</td>
    </tr>

    <tr>
      <td class="total"></td>
      <td class="total"></td>
      <td class="total"></td>
      <td id="prix_panier">150.2 €</td>
    </tr>
  </table>

  <div>
    <button id="achat">Confirmer</button>
  </div>
</div>
</body>

</html>


@endsection
