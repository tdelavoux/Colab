<!-- Side navigation -->
<div class="sidenav">

    @isset($project)
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Racine du projet" href="{{route('project.overview', $project['id']) }}"><i class="fas fa-home"></i></a>
    @endisset

    @if(isset($board))

        @if(isset($modules))
            @foreach($modules as $mods)
                @if(in_array($mods->id, $board->modules))
                <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="{{ $mods->libelle }}" href="{{route(strtolower($mods->libelle).'.view',$board['id']) }}"><i class="{{ $mods->icon }}"></i></a>
                @endif
            @endforeach
        @endif
        
        <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Paramètres" href="{{route('params.board.view', ['general', $board['id']]) }}"><i class="fas fa-cogs"></i></a>
    @else
        @isset($project)
            <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Paramètres" href="{{route('params.project.view', ['general', $project['id']]) }}"><i class="fas fa-cogs"></i></a>
            <a class="nav-link-left left-bar-tooltips" data-toggle="tooltip" title="Equipes" href="{{route('team.view', $project['id']) }}"><i class="fas fa-users"></i></a>
        @endisset
    @endif
    
</div>
