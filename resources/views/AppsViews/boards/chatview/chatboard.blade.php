@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="">{{$project['libelle']}}</a> / <a href="#">{{$board['libelle']}}</a> / <a style="color:#546bc7">Chat</a></h1>
    
    <hr>

    <div class="container">

        <!---------------- ZONE DE POST ----------------------------->
        <form action="{{ route('chat.postMessage') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <input name="fkChatRoom" value="{{ $chatRoom['id'] }}" type="hidden">
            <div class="row">
                <div class="chat-express-bloc jumbotron col-md-12">
                    <textarea class="form-control limited-area" maxlength="1000" placeholder="Partager une pensée, une question, un document" name="messagePost"></textarea>
                    <div id="img-picker-row" class="row"></div>
                    <div id="document-picker-row" class="row"></div>
                    <div class="icons-line-post">
                        <button type="button" class="btn link imagePickerAdd" ><i class="far fa-image image-color"></i></button>
                        <button type="button" class="btn link documentAdder"><i class="fas fa-paperclip"></i></button>
                        {{-- <button class="btn link"><i class="fas fa-user-tag"></i></button> --}}
                    </div>
                    <div class="btn-line-right">
                        <button type="submit" class="btn btn-primary btn-sm mt-05"><i class="far fa-paper-plane"></i>Partager</button>
                    </div>
                </div>
            </div>
        </form>
        <!---------------- FIN ZONE DE POST ------------------------->
    
        <!---------------- ZONE DE CHAT ----------------------------->
        @foreach($posts as $post)
        <div class="col-md-12">
            <div class="card chat-card ">
                <div class="card-header chat-header-card">
                    <div class="user-chating">
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{ asset(env('DIRUSER')) . '/' . $post->userImage }}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                        <span class="team-user-name">{{ $post->userName }}</span>
                    </div>
                    <div class="chat-card-timer"><i class="far fa-clock"></i>{{ $post->created_at->format('d/m/Y') }}</div>
                </div>

                <div class="card-body">

                    <div class="row">
                        @foreach($post->attachImg as $img)
                        <span class="col-md-3">
                            <span class="card-text"><img src="{{ asset(env('DIRPOSTIMG')) . '/' . $img->attachment }}" class="img-thumbnail" /></span>
                        </span>
                        @endforeach
                    </div>

                    <div class="row files-preview">
                        @foreach($post->attachFiles as $file)
                        <span class="col-md-3">
                            <a href="{{ asset(env('DIRPOSTFILES')) . '/' . $file->attachment }}" download class="card-text"><i class="fas fa-file-download"></i>{{ $file->attachment }}</a>
                        </span>
                        @endforeach
                    </div>

                    <span class="card-text chat-card-post">{{ $post->libelle }}</span>         
              
                    <span id="like_recap_{{$post->id}}" class="small-text">
                        @if(count($post->likes) !== 0)<i class="fas fa-heart"></i>  {{ count($post->likes)}} personne(s) aime(nt) ça
                        @else soyez le premier à liker
                        @endif
                    </span>
                    
                    <a role="button" class="likes-message" data-count="{{ count($post->likes) }}" data-self="{{ $post->selfLiked }}" data-id="{{$post->id}}" data-target="#like_recap_{{$post->id}}" data-route="{{ route('chat.likePost')}}">
                        <i class="far fa-thumbs-up"></i>
                        @if($post->selfLiked === 'true')
                            Je n'aime plus
                        @else
                            J'aime
                        @endif
                    </a>
            

                    <hr>
                    
                    <div class="chat-reponses">
                        @foreach($post->replies as $reply)
                        <div class="card-body-media-answer-line">
                            <div class="rounded-circle profile-img-xs" style="background-image:url('{{ asset(env('DIRUSER')) . '/' . $reply->userImage }}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                            <div class="card-body-media-answer-line-text">
                                <span class="team-user-name chat-answer-user-name">{{ $reply->userName }}</span>
                                <div>{{ $reply->reply }}</div>

                                <span id="like_recap_reply_{{$reply->id}}" class="small-text">
                                    @if(count($reply->likes) !== 0)<i class="fas fa-heart"></i>  {{ count($reply->likes)}} personne(s) aime(nt) ça
                                    @else soyez le premier à liker
                                    @endif
                                </span>
                                
                                <a role="button" class="likes-message" data-count="{{ count($reply->likes) }}" data-self="{{ $reply->selfLiked }}" data-id="{{ $reply->id }}" data-target="#like_recap_reply_{{$reply->id}}" data-route="{{ route('chat.likePostReply')}}">
                                    <i class="far fa-thumbs-up"></i>
                                    @if($reply->selfLiked === 'true')
                                        Je n'aime plus
                                    @else
                                        J'aime
                                    @endif
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
            
                </div>

                <div class="card-footer">
                    <form action="{{ route('chat.replyMessage') }}" method="POST">
                        @csrf
                        <input name="fkchatPost" value="{{ $post['id'] }}" type="hidden">
                        <textarea class="form-control limited-area" placeholder="Une réaction ? " maxlength="500" name="chatPostReply"></textarea>
                        <div class="btn-line-right">
                            <button class="btn btn-sm btn-info mt-05">Répondre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        <!---------------- ZONE DE CHAT ----------------------------->

    </div>
</div>

@stop


@section('addJS')
<script type="text/javascript" src="{{ asset('js/Chat.js') }}"></script>
@stop
