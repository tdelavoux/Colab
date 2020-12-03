@extends('include.layout')

@section('title_page', 'Mon Profil')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.userprofile.UserPartials._optionMenu')

    @switch($tab)
        @case('notify')
            @include('AppsViews.userprofile.UserPartials._optionContentNotify')
            @break
        @case('params')
            @include('AppsViews.userprofile.UserPartials._optionContentParams')
            @break
        @case('access')
            @include('AppsViews.userprofile.UserPartials._optionContentPasswd')
            @break
        @default
            @include('AppsViews.userprofile.UserPartials._optionContentInfos')
            @break
    @endswitch
    
     
</div>
@stop

@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{asset('css/User.css')}}">
@stop

@section('addJS')
<script type="text/javascript" src="{{ asset('js/User.js') }}"></script>
@stop