<!-- Side navigation -->
<div class="sidenav">

    @isset($project)
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Racine du projet" href="{{route('project.overview', $project['id']) }}"><i class="fas fa-home"></i></a>
    @endisset

    @if(isset($board))
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Wiki" href="{{route('wiki.view',$board['id']) }}"><i class="fas fa-book-reader"></i></a>
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Historique" href="{{route('logs.view',$board['id']) }}"><i class="fas fa-bars"></i></a>
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Gestionnaire Scrum" href="{{route('scrum.view',$board['id']) }}"><i class="far fa-window-maximize"></i></a>
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Gestionnaire Kaban" href="{{route('kaban.view',$board['id']) }}"><i class="fab fa-trello"></i></a>
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Issues" href="{{route('bugs.view',$board['id']) }}"><i class="fas fa-bug"></i></a>
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Chat" href="{{route('chat.view',$board['id']) }}"><i class="fas fa-comment-dots"></i></a>
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Statistiques" href="{{route('stats.view',$board['id']) }}"><i class="fas fa-chart-bar"></i></a>
        
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Paramètres" href="{{route('params.board.view', ['general', $board['id']]) }}"><i class="fas fa-cogs"></i></a>
    @else
        @isset($project)
            <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Paramètres" href="{{route('params.project.view', ['general', $project['id']]) }}"><i class="fas fa-cogs"></i></a>
            <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Equipes" href="{{route('team.view', $project['id']) }}"><i class="fas fa-users"></i></a>
        @endisset
    @endif
    
</div>
