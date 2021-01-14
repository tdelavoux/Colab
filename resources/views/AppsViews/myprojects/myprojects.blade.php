@extends('include.layout')

@section('title_page', 'Mes Projets')

@section('content')
<div id="content-page">
    <div class="container">
        <div class="col-md-12 dashboard-bloc">
            <div class="myprojects-title" >
                <h4>Mes Projets</h4>
                <button class="btn btn-info btn-sm"  data-toggle="modal" data-target="#addProject">Créer un projet</button>
            </div>

            @forelse  ($projects as $projet)
                <div class="dashboard-project-line">
                    <span class="dashboard-project-square" style="background-color:{{ $projet->hexaCode }}"></span>
                    <div class="dashboard-project-group">
                        <a href="{{route('project.overview', $projet->id) }}" class="dashboard-tache-name">{{ $projet->libelle }}</a>
                        <span class="dashboard-project-bio">{{ $projet->description }}</span>
                    </div>
                </div>
            @empty
            <div class="empty-line-bloc">
                <div class="empty-line-bloc-text">
                    <h4>Aucun Projet démarré ! </h4>
                    <p class="small-text">Créez en un dès maintenant pour booster votre productivité</p>
                </div>
                <img src="{{url('/img/empty.jpg')}}" class="dashboard-empty-img">
            </div>
            @endforelse
            
        </div>
    </div>
</div>

@include('AppsViews.myprojects.partials._createProject')

@stop