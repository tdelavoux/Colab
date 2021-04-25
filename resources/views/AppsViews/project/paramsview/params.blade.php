@extends('include.layout')

@section('title_page', 'Paramètres')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.project.paramsview.ParamsPartials._paramsMenu')

    @switch($tab)
        @case('fields')
            @include('AppsViews.project.paramsview.ParamsPartials._paramsFields')
            @break
        @case('access')
            @include('AppsViews.project.paramsview.ParamsPartials._paramsAccess')
            @break
        @default
            @include('AppsViews.project.paramsview.ParamsPartials._paramsGeneral')
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