@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')


<div id="content-page">

    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="#">Projet 1</a> / <a href="#">Sous Projet 1</a> / <a href="#" style="color:#546bc7">Tableau</a></h1>

    <div class="btn-line-right">
        <button class="btn btn-success">Ajouter une colone</button>
    </div>
    
    <hr>

    <div class="drag-container"></div>
    <div class="board">

        <div class="board-column todo">
            <div class="board-column-container">
                <div class="board-column-header" style="background-color:#546bc7">
                    <span>Todo</span>
                    <a href=""><i class="fas fa-times"></i></a>
                </div>
                <div class="board-column-content-wrapper">
                    <div class="board-column-content">
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
        </div>

        <div class="board-column working">
            <div class="board-column-container">
                <div class="board-column-header" style="background-color:#32a852">
                    <span>Working</span>
                    <a href=""><i class="fas fa-times"></i></a>
                </div>
                <div class="board-column-content-wrapper">
                    <div class="board-column-content">
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="board-column done">
            <div class="board-column-container">
                <div class="board-column-header" style="background-color:#8f324b">
                    <span>Done</span>
                    <a href=""><i class="fas fa-times"></i></a>
                </div>
                <div class="board-column-content-wrapper">
                    <div class="board-column-content">

                        <div class="board-item kaban-task">
                            <div class="kaban-task-libelle" >Libelle de tache bidon du fion</div>
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

        <div class="board-column done">
            <div class="board-column-container">
                <div class="board-column-header" style="background-color:#8f324b">
                    <span>Done</span>
                    <a href=""><i class="fas fa-times"></i></a>
                </div>
                <div class="board-column-content-wrapper">
                    <div class="board-column-content">

                        <div class="board-item kaban-task">
                            <div class="kaban-task-libelle" >Libelle de tache bidon du fion</div>
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
        
    </div>
</div>
@stop


@section('addJS')
<script type="text/javascript" src="{{ asset('js/muuri.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Kaban.js') }}"></script>
@stop
