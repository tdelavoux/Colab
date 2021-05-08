<div class="left-bar-option left-bar-option-second-level">
    <ul class="option-menu-list ">
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level {{ $Mod === 'Scrum' ? 'active' : '' }}" href="{{route('params.board.fieldsview', ['fields', $board->id, 'Scrum']) }}">SCRUM</a></li>
        {{--<li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level" href="{{route('params.board.fieldsview', ['fields', $board->id, 'Kaban']) }}">KABAN</a></li>--}}
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level {{ $Mod === 'Issues' ? 'active' : '' }}" href="{{route('params.board.fieldsview', ['fields', $board->id, 'Issues']) }}">ISSUES</a></li>
    </ul>
</div>

<div class="option-page-body">
    <h2>CHAMPS PERSONNALISEES</h2>

    @if($Mod)

        <div class="btn-line-right mb-1">
            @switch($Mod)
                @case('Scrum')
                    <button class="btn btn-sm btn-success" id="addFieldBtn" data-toggle="modal" data-target="#addFieldModal" data-route="{{ route('params.board.addScrumField') }}">Ajouter un champ</button>
                    @break
                @case('Issues')
                    <button class="btn btn-sm btn-success" id="addFieldBtn" data-toggle="modal" data-target="#addFieldModal" data-route="{{ route('params.board.addScrumField') }}">Ajouter un champ</button>
                    @break
                @default
            @endswitch
            
        </div>
        
        @foreach($fields as $field)
            @if(in_array($field->code, ['SELECT', 'SELECTPICKER']))
                <div class="habilitation-bloc col-md-12">
                    <div class="habilitation-line">
                        <div class="habilitation-bloc-header" >
                            <span class="fields-bloc-title">{{$field->libelle }}</span>   
                            <div>
                                <a class="btn btn-default text-danger" href="{{ route('params.board.closeInput', [$field->id, $board->id]) }}"><i class="far fa-trash-alt"></i></a>
                                @if($field->origine !== 'admin')
                                    <button class="btn btn-secondary addPredefinedValueBtn" data-toggle="modal" data-target="#addValueModal" data-route="{{ route('params.board.addPredefinedValue') }}" data-field="{{ $field->id }}">
                                        <i class="fas fa-plus"></i>Ajouter une valeur
                                    </button>
                                @endif
                            </div>           
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Libelle</th>
                                    <th>Couleur</th>
                                    <th>Clothing Step</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($field->predefinedValues as $value)
                                    @if($field->origine === 'admin')
                                        <tr>
                                            <td>{{ $value->value }}</td>
                                            <td> 
                                                @if($value->hexaCode)
                                                    <div class="color-picker" initialColor="{{ $value->hexaCode }}"></div>
                                                @endif
                                            </td>
                                            <td><input type="checkbox" {{ $value->clothing_step ? 'checked' : '' }} disabled/></td>
                                            <td></td>
                                        </tr> 
                                       
                                    @else 
                                        <tr>
                                            <td>{{ $value->value }}</td>
                                            <td> 
                                                @if($value->hexaCode)
                                                <div class="color-picker" initialColor="{{ $value->hexaCode }}" data-target="#colorPickerPdfVal{{$value->id}}"></div>
                                                <input type="hidden" id="colorPickerPdfVal{{$value->id}}" class="colorPickerPdfVal" value="" data-route="{{ route('params.board.updateColor') }}" data-input="{{ $value->id }}">
                                                @endif
                                            </td>
                                            <td><input type="checkbox" class="clothingStepBtn" {{ $value->clothing_step ? 'checked' : '' }} data-route="{{ route('params.board.updateClothingStep') }}" data-input="{{ $value->id }}"/></td>
                                            <td>
                                                <form action="{{route('params.board.closePredefinedValue') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="fkPredefinedValue" value="{{$value->id}}">
                                                    <button class="btn btn-default text-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                                
                                            </td>
                                        </tr> 
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else 
                <div class="habilitation-bloc col-md-12">
                    <div class="habilitation-line">
                        <div class="habilitation-bloc-header" >
                            <span class="fields-bloc-title">{{$field->libelle }}</span>
                            <a class="btn btn-default text-danger" href="{{ route('params.board.closeInput', [$field->id, $board->id]) }}"><i class="far fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    @else
        <div class="no-team-bloc">
            <img src="{{ asset('img/team.jpg') }}" width="500px">
            <h5>Sélectionnez une équipe pour paramétrer ses habilitation</h5>
        </div>
    @endif
</div>

@include('AppsViews.boards.paramsview.ParamsPartials._paramsFieldsModalInputs')
@include('AppsViews.boards.paramsview.ParamsPartials._paramsFieldsModalInputValues')