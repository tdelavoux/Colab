@extends('include.layout')

@section('title_page', 'Scrum Board')

@section('content')
<div id="content-page">
    <h1>Projet 1 / Sous Projet 1 / Tableau</h1>

    <div class="btn-line-right">
        <button class="btn btn-success">Ajouter un Sprint</button>
    </div>
    
    <hr>

    <div class="row">
        <div class="kaban-bloc">
            <!------------------ HEADER --------------------->
            <div class="kaban-header">
                <span class="kaban-header-title">Nouveau</span>
                <i class="fas fa-plus"></i>
            </div>

            <!------------------ BODY --------------------->
            <div class="kaban-body">
                <div class="kaban-task">

                    <div class="kaban-task-libelle">Libelle de tache bidon du fion</div>

                    <div class="kaban-task-bottom">
                        <span>
                            <i class="far fa-calendar-check"></i> 14/06/2020
                        </span>
                        <span>
                            <i class="fas fa-paperclip"></i> 1
                        </span>
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>    
                    </div>
                </div>

                <div class="kaban-task">

                    <div class="kaban-task-libelle">Libelle de tache bidon du fion</div>

                    <div class="kaban-task-bottom">
                        <span>
                            <i class="far fa-calendar-check"></i> 14/06/2020
                        </span>
                        <span>
                            <i class="fas fa-paperclip"></i> 1
                        </span>
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>    
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop
