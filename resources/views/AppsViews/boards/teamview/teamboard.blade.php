@extends('include.layout')

@section('title_page', 'Teams Board')

@section('content')


<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.boards.teamview.TeamPartials._optionMenu')
    @include('AppsViews.boards.teamview.TeamPartials._optionContentInfos')
    
</div>

@stop
