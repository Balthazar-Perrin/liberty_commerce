@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="../css/authentification.css">
    <title>Neit's connexion</title>
</head>
<div id="creer_compte">
    <a href="{{ route('register') }}">Créer un compte</a>
</div>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <fieldset>
        <legend>Se connecter</legend>

        <label for="email">{{ __('Adresse E-mail :') }}</label><br>

        <div>
            <input type="email" class="form-control @error('mail') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ 'Adresse e-mail ou mot de passe incorect' }}</strong>
            </span>
            @enderror
        </div>
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>

            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ 'Adresse e-mail ou mot de passe incorect' }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>



        <div>
            <button type="submit">
                {{ __('Se connecter') }}
            </button><br>

            @if (Route::has('password.request'))
            <a id="mdp_oubli" href="{{ route('password.request') }}">
                {{ __('Mot de passe oublié ?') }}
            </a>
            @endif
        </div>

</form>

@endsection
