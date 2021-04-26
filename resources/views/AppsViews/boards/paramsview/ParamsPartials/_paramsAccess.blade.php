<div class="left-bar-option left-bar-option-second-level">
    <ul class="option-menu-list ">
        @foreach($board->teams as $team)
            <li class="option-menu-list-item option-menu-list-item-second-level">        
                <a class="option-menu-list-item-link option-menu-list-item-link-second-level {{ $team->id == $fkTeamProject ? 'active' : '' }}" href="{{ route('params.board.view', ['access', $board->id, $team->id]) }}">{{ $team->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

<div class="option-page-body">
    <h2>Habilitations</h2>

    @if($fkTeamProject)

        @foreach($modules as $mod)
            <div class="habilitation-bloc col-md-12">
                <div class="habilitation-line">
                    <div class="habilitation-bloc-header collapsable" data-toggle="collapse" data-target="#habs{{ $mod->id }}">
                        <span><i class="{{ $mod->icon }}"></i> {{ $mod->libelle }}</span>
                        <span class="collapse-arrrow" ><i class="fas fa-chevron-right"></i></span>      
                    </div>
                    <div class="habilitation-bloc-body collapse" id="habs{{ $mod->id }}">

                        @foreach($mod->actions as $action)
                        <div class="habilitation-body-line">
                            <span>{{ $action->libelle }}</span>
                            <div class="btn-group radio-selector-group" id="status" data-toggle="buttons">
                                <label class="btn btn-default btn-on btn-xs active">
                                    <input type="radio" value="1" name="action{{ $action->id }}[]" class="radio-selector changeHabilitation" {{ in_array($action->id, $board->habs) ? 'checked' : ''}} data-team="{{ $fkTeamProject }}" data-ma="{{ $action->id }}" data-route="{{ route('params.board.updateHabilitations') }}">
                                    <i class="fas fa-check" ></i>
                                </label>
                                <label class="btn btn-default btn-off btn-xs ">
                                    <input type="radio" value="0" name="action{{ $action->id }}[]" class="radio-selector changeHabilitation" {{ !in_array($action->id, $board->habs) ? 'checked' : ''}} data-team="{{ $fkTeamProject }}" data-ma="{{ $action->id }}" data-route="{{ route('params.board.updateHabilitations') }}">
                                    <i class="fas fa-times"></i>
                                </label>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endforeach

    @else
        <div class="no-team-bloc">
            <img src="{{ asset('img/team.jpg') }}" width="500px">
            <h5>Sélectionnez une équipe pour paramétrer ses habilitation</h5>
        </div>
    @endif
    
</div>