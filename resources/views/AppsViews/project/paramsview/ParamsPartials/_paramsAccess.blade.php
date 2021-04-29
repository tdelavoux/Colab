<div class="option-page-body">
    <h2>Habilitations</h2>

    @if ($project->teams)
        @foreach($project->teams as $team)
            <!-- --------------- Wiki ------------------------->
            <div class="habilitation-bloc col-md-12">   
                <div class="habilitation-line">
                    <div class="habilitation-bloc-header collapsable" data-toggle="collapse" data-target="#habs_{{ $team->id }}">
                        <span><i class="fas fa-users"></i>{{$team->name }}</span>
                        <span class="collapse-arrrow" ><i class="fas fa-chevron-right"></i></span>      
                    </div>
                    <div class="habilitation-bloc-body collapse" id="habs_{{$team->id }}">
                        @foreach($project->boards as $table)
                            <div class="habilitation-body-line">
                                <span style="color:{{ $table->hexaCode }};"><strong>{{ $table->libelle }} :</strong> Acceder au contenu</span>
                                <div class="btn-group radio-selector-group" data-toggle="buttons">
                                    <label class="btn btn-default btn-on btn-xs ">
                                        <input type="radio" name="visibility[]" value="1" {{ in_array($team->id, $table->access) ? 'checked="checked"' : '' }} class="radio-selector changeAccess"  data-route="{{ route('params.project.updateAccess') }}" data-team="{{ $team->id }}" data-board="{{ $table->id }}">
                                        <i class="fas fa-check"></i>
                                    </label>
                                    <label class="btn btn-default btn-off btn-xs">
                                        <input  type="radio" name="visibility[]" value="0"  {{ !in_array($team->id, $table->access) ? 'checked="checked"' : '' }} class="radio-selector changeAccess"  data-route="{{ route('params.project.updateAccess') }}" data-team="{{ $team->id }}" data-board="{{ $table->id }}">
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
            <h5>Sélectionnez une équipe pour paramétrer ses accès</h5>
        </div>    
    @endif

</div>