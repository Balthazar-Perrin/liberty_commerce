@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <link href="../img/logosite.PNG" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/authentification.css">
    <title>Neit's admin</title>
</head>

<body>

    <form action="{{ route('add_produit') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        <fieldset>
            <legend>Ajouter un produit</legend>
            <label for="titre">Nom du produit :</label><br>
            <input type="text" name="titre" required><br><br>
            <label for="prix">Prix :</label><br>
            <input type="number" step="0.01" name="prix" required min="0.01"><br><br>
            <label for="description">Description :</label><br>
            <textarea name="description" rows="5" data-limit-rows="true" cols="50"
                placeholder="Description du produit"></textarea><br><br>
            <label for="categorie">Catégorie :</label><br>
            <input type="text" name="categorie" required><br><br>
            <label for="image">Image :</label><br>
            <input type="file" name="image" required><br><br>
            <label for="produit">Stock :</label><br>
            <input type="number" name="stock" required min="1" max="99999"><br><br>
            <button type="submit">Confirmer</button>
        </fieldset>
    </form>

</body>

</html>
@endsection
