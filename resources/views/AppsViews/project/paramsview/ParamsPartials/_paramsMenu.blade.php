<div class="left-bar-option">
    <ul class="option-menu-list">
        <li class="option-menu-list-item"><a class="option-menu-list-item-link" href="{{route('params.project.view', ['general', $project->id]) }}">GENERAL</a></li>
        <li class="option-menu-list-item"><a class="option-menu-list-item-link" href="{{route('params.project.view', ['access', $project->id]) }}">HABILITATIONS</a></li>
        {{-- <li class="option-menu-list-item"><a class="option-menu-list-item-link">IMPORTS</a></li> --}}
        {{-- <li class="option-menu-list-item"><a class="option-menu-list-item-link">NOTIFICATIONS</a></li> --}}
    </ul>
</div>

