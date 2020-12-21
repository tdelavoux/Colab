@extends('auth.include.layout')

@section('title_page', 'Connexion')

@section('content')
<div id="login-Page-left">
    <div id="login-Page-101">
        <div id="centered-bloc" class="col-md-8">
            <h3 class="text-center">Se connecter</h3>

            <form  action="{{ route('verifyLogin') }}" method="post">
                @csrf

                @include('auth.partials._errors')

                <div class="form-group">
                    <label for="email">email</label>
                    <input id="email" placeholder="Dupont" name="email" type="text" class="form-control" data-name="email" value="{{ old('email') }}">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" placeholder="******" name="password" type="password" class="form-control">
                </div>

                <div class="form-btn text-center">
                    <button type="submit" class="btn btn-primary submit-form-btn">Login <i class="fas fa-arrow-right"></i></button>
                </div>

                <div class="row">
                    <p class="text-center w-100 mt-1">Pas encore de compte ? Créez en un <a href="{{ route('register') }}" class="login-link">ici</a></p>
                </div>
            </form>	
        </div>
    </div>
</div>

<div id="login-Page-right"></div>
@stop


@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}">
@stop
