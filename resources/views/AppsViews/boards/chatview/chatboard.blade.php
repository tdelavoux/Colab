@extends('include.layout')

@section('title_page', 'Kaban Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="">{{$project['libelle']}}</a> / <a href="#">{{$board['libelle']}}</a> / <a style="color:#546bc7">Chat</a></h1>
    
    <hr>

    <div class="container">
  
        @include('AppsViews.boards.chatview.chatPartials._postZone')
        @include('AppsViews.boards.chatview.chatPartials._chatZone')
       
    </div>
</div>

@stop


@section('addJS')
<script type="text/javascript" src="{{ asset('js/Chat.js') }}"></script>
@stop
