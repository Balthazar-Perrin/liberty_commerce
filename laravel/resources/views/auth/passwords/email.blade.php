@extends('layouts.app')

@section('content')

<head>
    <title>Neit's réinitialisation de mot de passe</title>
    <link rel="stylesheet" href="../css/authentification.css">
</head>

<div class="marge">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <fieldset>
            <legend>Réinitialiser mot de passe</legend>
            <div>
                <label for="email">{{ __('Adresse E-mail :') }}</label>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div>
                <button type="submit">{{ __('Envoyer lien de réinitialisation') }}</button>
            </div>

            </fieldset>
    </form>
</div>
@endsection
