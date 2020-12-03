@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')
<div id="content-page">
    <h1>Projet 1 / Sous Projet 1 / Tableau</h1>
    
    <hr>

    <div class="container">
        <div class="row team-user-bloc">

            <div class="col-md-12 team-user-bloc-line logs-user-bloc-line">
                <div class="rounded-circle profile-img-sm" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                <div class="team-user-infos logs-infos">
                    <span class="team-user-name chat-answer-user-name">Thibault Delavoux</span>
                    <span>A ajouté un commentaire à la tâche <a class="log-links" href="#">#125 Ajouter des fichiers de logs au projet</a></span>
                </div>
                <div>
                    <span class="chat-card-timer"><i class="far fa-clock"></i>10 minutes ago</span>
                </div>
            </div>

            <div class="col-md-12 team-user-bloc-line logs-user-bloc-line">
                <div class="rounded-circle profile-img-sm" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                <div class="team-user-infos logs-infos">
                    <span class="team-user-name chat-answer-user-name">Thibault Delavoux</span>
                    <span>A changé de statur de la tâche <a class="log-links" href="#">#125 Ajouter des fichiers de logs au projet</a> à <span class="log-value">Cloturé</span></span>
                </div>
                <div>
                    <span class="chat-card-timer"><i class="far fa-clock"></i>10 minutes ago</span>
                </div>
            </div>

        </div>
    </div>
</div>
@stop
