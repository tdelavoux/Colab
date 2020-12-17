@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')


<div id="content-page">

    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="#">Projet 1</a> / <a href="#">Sous Projet 1</a> / <a href="#" style="color:#546bc7">Tableau</a></h1>
  
    <hr>

    <div class="board">

        <div class="board-column todo">
            <div class="board-column-container">
                <div class="board-column-header" style="background-color:#546bc7">
                    <span>Todo</span>
                    <a role="button"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <div id="one" class="board-column-content">
                    <div class="board-item kaban-task">
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
                    <div class="board-item kaban-task">
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

        <div class="board-column todo">
            <div class="board-column-container">
                <div class="board-column-header" style="background-color:#546bc7">
                    <span>Todo</span>
                    <a role="button"><i class="fas fa-ellipsis-h"></i></a>
                </div>
                <div id="two" class="board-column-content">
                    <div class="board-item kaban-task">
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

        <div class="board-column todo">
            <button class="btn btn-info">+ Ajouter une colone</button>
        </div>
   
    </div>
</div>
@stop

@section('addCSS')
<link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}dragula/dragula.min.css">
@stop


@section('addJS')
<script type="text/javascript" src="{{env('DIRLIB')}}dragula/dragula.min.js"></script>
<script type="text/javascript" src="{{ asset('js/Kaban.js') }}"></script>
@stop
