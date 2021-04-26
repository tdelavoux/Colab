<div class="option-page-body">
    <h2>Modules</h2>
    <div class="row">
        @foreach($modules as $mod)
        <div class="col-md-12 module-bloc-line">
            <div class="module-logo"><i class="{{ $mod->icon }}"></i> {{ $mod->libelle }}</div>
            <div class="module-description">{{ $mod->description }}</div>
            <div class="module-activate">
                @if($mod->id !== $board->fk_module_default)
                    <div class="btn-group radio-selector-group" id="status" data-toggle="buttons">
                        <label class="btn btn-default btn-on btn-xs">
                            <input type="radio" name="visibility[]" value="1" {{ in_array($mod->id, $board->modules) ? 'checked="checked"' : '' }} class="radio-selector changeVisibility"  data-route="{{ route('params.board.updateVisibility') }}"  data-tableau="{{ $board->id }}" data-module="{{ $mod->id }}">
                            <i class="far fa-eye"></i>
                        </label>
                        <label class="btn btn-default btn-off btn-xs ">
                            <input type="radio" name="visibility[]" value="0" {{ !in_array($mod->id, $board->modules) ? 'checked="checked"' : '' }} class="radio-selector changeVisibility"  data-route="{{ route('params.board.updateVisibility') }}"  data-tableau="{{ $board->id }}" data-module="{{ $mod->id }}">
                            <i class="far fa-eye-slash"></i>
                        </label>
                    </div>
                @else
                   <span class="small-text">Module par défaut du tableau</span> 
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
