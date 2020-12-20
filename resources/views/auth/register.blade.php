@extends('auth.include.layout')

@section('title_page', 'Inscription')

@section('content')

<div id="login-Page-left">
    <div id="login-Page-101">
        <div id="centered-bloc" class="col-md-8">

            <h3 class="text-center">S'inscrire</h3>

            <form  action="{{ route('newUser') }} " method="post">
                @csrf

                @include('auth.partials._errors')

                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input id="Nom" placeholder="Dupont" name="Nom" type="text" class="form-control" data-name="Nom" value="{{ old('Nom') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" placeholder="pierre.dupont@gmail.com" name="email" type="email" class="form-control" data-name="Email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" placeholder="******" name="password" type="password" class="form-control" data-name="Mot de passe">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Ressaisir le password</label>
                    <input id="password_confirmation" placeholder="******" name="password_confirmation" type="password" class="form-control" data-name="Mot de passe">
                </div>

                <div class="form-btn text-center">
                    <button type="submit" class="btn btn-primary submit-form-btn">Sign in <i class="fas fa-arrow-right"></i></button>
                </div>

                <div class="row">
                    <p class="text-center w-100 mt-1">Déjà un compte ? <a href="{{ route('login') }}" class="login-link">Connectez-vous</a></p>
                </div>
            </form>	
        </div>
    </div>
</div>

<div id="inscription-Page-right"></div>
@stop


@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}">
@stop
