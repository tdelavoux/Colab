@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')
<div id="content-page">
    <h1>Projet 1 / Sous Projet 1 / Tableau</h1>
    
    <hr>

    <div class="container">

        <!---------------- ZONE DE POST ----------------------------->
        <div class="row">
            <div class="chat-express-bloc jumbotron col-md-12">
                <textarea class="form-control" placeholder="Partager une pensée, une question, un document"></textarea>
                <div class="btn-line-right">
                    <button class="btn btn-primary btn-sm mt-05"><i class="far fa-paper-plane"></i>Partager</button>
                </div>
            </div>
        </div>
        <!---------------- FIN ZONE DE POST ------------------------->
    
        <!---------------- ZONE DE CHAT ----------------------------->
        <div class="col-md-12">
            <div class="card chat-card ">
                <div class="card-header chat-header-card">
                    <div class="user-chating">
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        <span class="team-user-name">Thibault Delavoux</span>
                    </div>
                    <div class="chat-card-timer"><i class="far fa-clock"></i>21/11/2020</div>
                </div>

                <div class="card-body">
                    <div class="card-body-media">
                        <div class="chat-media-btn-line">
                            <button class="btn btn-link btn-media-link"><i class="fas fa-thumbtack"></i>Epingler</button>
                        </div> 
                    </div>
                    <span class="card-text">Salut les asticots. y en a qui savent comment on fait ? :)</span>

                    <hr>

                    <div class="card-body-media-answer-line">
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        <div class="card-body-media-answer-line-text">
                            <span class="team-user-name chat-answer-user-name">Thibault Delavoux</span>
                            <div class="">Nan laissez tombé j'ai trouvé.</div>
                        </div>
                    </div>

                    <div class="card-body-media-answer-line">
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        <div class="card-body-media-answer-line-text">
                            <span class="team-user-name chat-answer-user-name">Thibault Delavoux</span>
                            <div class="">C'était simple finalement :p.</div>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <textarea class="form-control" placeholder="Une réaction ? "></textarea>
                    <div class="btn-line-right">
                        <button class="btn btn-sm btn-info mt-05">Répondre</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card chat-card ">
                <div class="card-header chat-header-card">
                    <div class="user-chating">
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        <span class="team-user-name">Thibault Delavoux</span>
                    </div>
                    <div class="chat-card-timer"><i class="far fa-clock"></i>21/11/2020</div>
                </div>

                <div class="card-body">
                    <div class="card-body-media">
                        <div class="chat-media-btn-line">
                            <button class="btn btn-link btn-media-link"><i class="fas fa-thumbtack"></i>Epingler</button>
                        </div> 
                    </div>
                    <span class="card-text"><img src="{{asset('/img/test.jpg')}}" class="img-thumbnail" /></span>

                </div>

                <div class="card-footer">
                    <textarea class="form-control" placeholder="Une réaction ? "></textarea>
                    <div class="btn-line-right">
                        <button class="btn btn-sm btn-info mt-05">Répondre</button>
                    </div>
                </div>
            </div>
        </div>
        <!---------------- ZONE DE CHAT ----------------------------->

    </div>
</div>
@stop
