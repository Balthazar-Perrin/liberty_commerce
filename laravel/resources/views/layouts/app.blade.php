<!DOCTYPE html>
<html>

<head>
<link href="../img/logosite.PNG" rel="shortcut icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/footer.css">



<script src="https://kit.fontawesome.com/43f8f3c5b2.js" crossorigin="anonymous"></script>
</head>

<body>
<header>

<div class="logo"></div>
<nav class="nav">
@if(\Auth::check())

<ul class="liensheader">
<li><a class="lienheader" href="{{ route('home') }}">Catalogue</a></li>
<li><a class="lienheader" href="{{ route('panier') }}">Panier</a></li>
<li><a class="lienheader" href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Se déconnecter</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</ul>
</nav>
<div class="user">
<p>Connecté en tant que : {{ Auth::user()->name }}</p>
</div>
@else
<ul class="liensheader">
<li><a class="lienheader" href="{{ route('home') }}">Catalogue</a></li>
<li><a class="lienheader" href="{{ route('login') }}">Connexion</a></li>
@if (Route::has('register'))
<li><a class="lienheader" href="{{ route('register') }}">Créer un compte</a></li>
</ul>
@endif
@endif


</header>
<main class="py-4">
@yield('content')
</main>

<footer>
<ul class="icone">
<li class="list"><a class="social" href=""><i class="fab fa-twitter-square"></i></a></li>
<li class="list"><a class="social" href=""><i class="fab fa-facebook-square"></i></a></li>
</ul>
</footer>
</body>


</html>