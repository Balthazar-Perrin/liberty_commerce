@extends('layouts.app')

@section('content')
<head>
    <title>Neit's création de compte</title>
    <link rel="stylesheet" href="../css/authentification.css">
</head>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <fieldset class="marge">
        <legend>Créer un compte</legend>
        <div>
            <label for="name">{{ __('Nom :') }}</label>

            <div>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="email">{{ __('Adresse E-mail :') }}</label>

            <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ 'Cette adresse e-mail a déjà prise.' }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password">{{ __('Mot de passe :') }}</label>

            <div>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ 'Veuillez entrer un mot de passe.' }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password-confirm">{{ __('Confirmer le mot de passe :') }}</label>

            <div>
                <input type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>


        <div>
            <button type="submit">{{ __('Confirmer') }}</button>
        </div>

    </fieldset>
</form>

@endsection
