@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="">{{$project['libelle']}}</a> / <a href="#">{{$board['libelle']}}</a> / <a style="color:#546bc7">Chat</a></h1>
    
    <hr>

    <div class="container">

        <!---------------- ZONE DE POST ----------------------------->
        <form action="{{ route('chat.postMessage') }}" method="POST">
            @csrf
            <input name="fkChatRoom" value="{{ $chatRoom['id'] }}" type="hidden">
            <div class="row">
                <div class="chat-express-bloc jumbotron col-md-12">
                    <textarea class="form-control limited-area" maxlength="1000" placeholder="Partager une pensée, une question, un document" name="messagePost"></textarea>
                    <div class="icons-line-post">
                        <button class="btn link"><i class="far fa-image image-color"></i></button>
                        <button class="btn link"><i class="fas fa-paperclip"></i></button>
                        <button class="btn link"><i class="fas fa-user-tag"></i></button>
                    </div>
                    <div class="btn-line-right">
                        <button type="submit" class="btn btn-primary btn-sm mt-05"><i class="far fa-paper-plane"></i>Partager</button>
                    </div>
                </div>
            </div>
        </form>
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
                    <a role="button" class="likes-message liked" data-likes="5"><i class="far fa-thumbs-up"></i> 5 personnes aiment ça</a>

                    <hr>

                    <div class="chat-reponses">
                        <div class="card-body-media-answer-line">
                            <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            <div class="card-body-media-answer-line-text">
                                <span class="team-user-name chat-answer-user-name">Thibault Delavoux</span>
                                <div>Nan laissez tombé j'ai trouvé.</div>
                                <a role="button" class="likes-message" data-likes="5"><i class="far fa-thumbs-up"></i> Liker</a>
                            </div>
                        </div>
    
                        <div class="card-body-media-answer-line">
                            <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            <div class="card-body-media-answer-line-text">
                                <span class="team-user-name chat-answer-user-name">Thibault Delavoux</span>
                                <div>C'était simple finalement :p.</div>
                                <a role="button" class="likes-message" data-likes="5"><i class="far fa-thumbs-up"></i> Liker</a>
                            </div>
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
                    <a role="button" class="likes-message" data-likes="5"><i class="far fa-thumbs-up"></i> Liker</a>
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


@section('addJS')
<script type="text/javascript" src="{{ asset('js/Chat.js') }}"></script>
@stop
