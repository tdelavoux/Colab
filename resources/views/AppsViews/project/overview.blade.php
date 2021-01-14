@extends('include.layout')

@section('title_page', 'Overview')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="{{route('project.overview', $project['id']) }}">{{ $project['libelle']}}</a></h1>

    
</div>

@stop

@section('addCSS')

@stop

@section('addJS')

@stop