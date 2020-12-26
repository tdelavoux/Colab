@extends('include.layout')

@section('title_page', 'Paramètres')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.boards.paramsview.ParamsPartials._paramsMenu')

    @switch($tab)
        @case('fields')
            @include('AppsViews.boards.paramsview.ParamsPartials._paramsFields')
            @break
        @case('access')
            @include('AppsViews.boards.paramsview.ParamsPartials._paramsAccess')
            @break
        @case('mods')
            @include('AppsViews.boards.paramsview.ParamsPartials._paramsModules')
            @break
        @default
            @include('AppsViews.boards.paramsview.ParamsPartials._paramsGeneral')
            @break
    @endswitch
</div>

@stop

@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{asset('css/User.css')}}">
@stop

@section('addJS')
<script type="text/javascript" src="{{ asset('js/Params.js') }}"></script>
@stop