@extends('include.layout')

@section('title_page', 'Teams Board')

@section('content')
<div id="content-page">
    <h1>Projet 1 / Sous Projet 1 / Tableau</h1>

    <button class="btn btn-success">Ajouter une equipe</button>

    <hr>

    <div class="content-page-inline option-content-page">

        @include('AppsViews.teamview.TeamPartials._optionMenu')
        @include('AppsViews.teamview.TeamPartials._optionContentInfos')
        
    </div>

</div>
@stop
