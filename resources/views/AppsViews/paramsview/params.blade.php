@extends('include.layout')

@section('title_page', 'Paramètres')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.paramsview.ParamsPartials._paramsMenu')

    @switch($tab)
        @case('metrics')
            @include('AppsViews.paramsview.ParamsPartials._paramsMetriques')
            @break
        @case('fields')
            @include('AppsViews.paramsview.ParamsPartials._paramsFields')
            @break
        @case('access')
            @include('AppsViews.paramsview.ParamsPartials._paramsAccess')
            @break
        @default
            @include('AppsViews.paramsview.ParamsPartials._paramsGeneral')
            @break
    @endswitch
</div>

@stop

@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{asset('css/User.css')}}">
@stop
