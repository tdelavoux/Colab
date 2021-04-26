@extends('include.layout')

@section('title_page', 'Overview')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="{{route('project.overview', $project['id']) }}">{{ $project['libelle']}}</a></h1>

    <hr>

    <div class="btn-line-right">
        <button class="btn btn-sm btn-success"  data-toggle="modal" data-target="#addBoard" >Ajouter un tableau</button>
    </div>

    <div class="container-fluid">
        @forelse ($project->tableaux as $tableau)
        <a href="{{ route(strtolower($tableau->moduleDefault) . '.view', $tableau['id']) }}" class="col-md-3 project-card">
            <div class="project-card-liseret" style="background-color:{{ $tableau->hexaCode }}"></div>
            <div class="project-card-content">
                <div class="project-card-header">
                    <span style="color:{{ $tableau->hexaCode }}">{{ $tableau->libelle }}</span>
                </div>
                <div class="project-card-body">
                    {{ $tableau->description }}
                </div>
                <div class="project-card-footer">
                    <span><i class="fas fa-chalkboard"></i> 4</span>
                    <span><i class="fas fa-user-friends"></i>3</span>
                    <span><i class="fas fa-tasks"></i>15</span>
                    <span><i class="fas fa-mug-hot"></i><i class="fas fa-infinity"></i></span>
                </div>
            </div>
        </a>
        
        @empty
            <h4>Aucun Tableau dans ce projet </h4>
        @endforelse
    </div>

</div>

@include('AppsViews.project.partials._createBoard')

@stop
