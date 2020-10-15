@extends('include.layout')

@section('title_page', 'Mon Profil')

@section('content')
<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.userprofile.UserPartials._optionMenu')
    @include('AppsViews.userprofile.UserPartials._optionContentPasswd')
     
</div>
@stop