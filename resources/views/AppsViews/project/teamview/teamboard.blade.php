@extends('include.layout')

@section('title_page', 'Teams Board')

@section('content')


<div id="content-page" class="content-page-inline option-content-page">

    @include('AppsViews.project.teamview.TeamPartials._leftNavTeams')

    
    <div id="team-content" class="option-page-body">

        @if(isset($teamMembers))
            @include('AppsViews.project.teamview.TeamPartials._optionContentInfos') 
        @else
            <div class="no-team-bloc">
                <img src="{{ asset('img/team.jpg') }}" width="500px">
                <h5>Sélectionnez une équipe pour consulter les membres</h5>
            </div>
        @endif

    </div>
    
    
</div>

@stop

@section('addJS')
    <script type="text/javascript" src="{{ asset('js/Teams.js') }}"></script>
@stop

