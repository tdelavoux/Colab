<div class="left-bar-option">
    <ul class="option-menu-list">
        <li class="option-menu-list-item"><a class="option-menu-list-item-link" href="{{route('params.board.view', ['general', $board->id]) }}">GENERAL</a></li>
        <li class="option-menu-list-item"><a class="option-menu-list-item-link" href="{{route('params.board.view', ['mods', $board->id]) }}">MODULES</a></li>
        <li class="option-menu-list-item"><a class="option-menu-list-item-link" href="{{route('params.board.fieldsview', ['fields', $board->id]) }}">CHAMPS DE SAISIE</a></li>
        <li class="option-menu-list-item"><a class="option-menu-list-item-link" href="{{route('params.board.view', ['access', $board->id]) }}">HABILITATIONS</a></li>
        {{-- <li class="option-menu-list-item"><a class="option-menu-list-item-link">IMPORTS</a></li> --}}
        {{-- <li class="option-menu-list-item"><a class="option-menu-list-item-link">NOTIFICATIONS</a></li> --}}
    </ul>
</div>

