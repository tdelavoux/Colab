<div class="left-bar-option left-bar-option-second-level">
    <ul class="option-menu-list ">
        @foreach($teams as $team)
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <a class="option-menu-list-item-link option-menu-list-item-link-second-level uppercase " href="{{ route('team.viewMembers', [ $project['id'], $team['id'] ]) }}">{{ $team->name }}</a>
        </li>
        @endforeach
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <button class="btn option-menu-list-item-link option-menu-list-item-link-second-level shadow-none" data-toggle="modal" data-target="#teamAddModal">
                <i class="fas fa-user-plus"></i>AJOUTER
            </button>
        </li>
    </ul>
</div>

@include('AppsViews.project.teamview.TeamPartials._modalTeamCreate')