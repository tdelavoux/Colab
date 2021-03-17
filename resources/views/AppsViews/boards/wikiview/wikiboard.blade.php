@extends('include.layout')

@section('title_page', 'Wiki Board')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.boards.wikiview.WikiPartials._wikiSide')
    @include('AppsViews.boards.wikiview.WikiPartials._wikiContent')
    @include('AppsViews.boards.wikiview.WikiPartials._modalChapterAdding')

</div>
@stop

@section('addCSS')
    <link rel="stylesheet" type="text/css" href="{{asset('css/User.css')}}">
@stop

@section('addJS')
    <script type="text/javascript" src="{{ asset('js/Wiki.js') }}"></script>
@stop
