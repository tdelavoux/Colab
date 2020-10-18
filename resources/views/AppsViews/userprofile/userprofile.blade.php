@extends('include.layout')

@section('title_page', 'Mon Profil')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.userprofile.UserPartials._optionMenu')
    @include('AppsViews.userprofile.UserPartials._optionContentInfos')
     
</div>
@stop

@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{asset('css/User.css')}}">
@stop

@section('addJS')
<script type="text/javascript" src="{{ asset('js/User.js') }}"></script>
@stop