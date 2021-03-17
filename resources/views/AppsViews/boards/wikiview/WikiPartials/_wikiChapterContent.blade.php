<h1>{{ $chapterInfos->libelle }}</h1>

<!-- Inclusion de la librairie de modification des contenus -->
<script src="{{ asset('js/editorjs/editorjs.js') }}"></script>
<script src="{{ asset('js/editorjs/header.js') }}"></script>
<script src="{{ asset('js/editorjs/list.js') }}"></script>
<script src="{{ asset('js/editorjs/quote.js') }}"></script>
<script src="{{ asset('js/editorjs/underline.js') }}"></script>
<script src="{{ asset('js/editorjs/checklist.js') }}"></script>
<script src="{{ asset('js/editorjs/table.js') }}"></script>

@include('AppsViews.boards.wikiview.WikiPartials._wikiNoteEmpty')

@foreach($notes as $note)
<div class="card chat-card ">
    <div class="card-header chat-header-card">
        <div class="user-chating">
            <div class="rounded-circle profile-img-xs" style="background-image:url('{{ asset(env('DIRUSER')) . '/' . $note->userImage }}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <span class="team-user-name">{{ $note->userName }}</span>
        </div>
        <div class="chat-card-timer"><i class="far fa-clock"></i>{{ $note->updated_at->format('d/m/Y') }}</div>
    </div>

    <div class="card-body">

        <div id="wiki-note-content_{{ $note->id }}" class="wiki-bloc-content">

            @foreach(json_decode($note->content)->blocks as $value)
                @switch($value->type)
                    @case("header")
                        <h2>{!! $value->data->text !!}</h2>
                        @break

                    @case("paragraph")
                        <p>{!! $value->data->text !!}</p>
                        @break
                    
                    @case("linkTool")
                        <a href="{{ $value->data->link }}">{{ $value->data->link }}</a>
                        @break
                    
                    @case("checklist")
                        <div class="wiki-checklist wiki-element">
                            @foreach( $value->data->items as $checkbox)
                                <span><input type="checkbox" {{ $checkbox->checked ? 'checked' : '' }} disabled> {{ $checkbox->text }}</span>
                            @endforeach
                        </div>
                        @break
                        
                    @case("list")
                        <ul class="wiki-list wiki-element" style="{{  $value->data->style === "ordered" ? 'list-style: decimal;' : 'list-style: disc;'}}">
                            @foreach( $value->data->items as $li)
                                <li>{{ $li }}</li>
                            @endforeach
                        </ul>
                        @break

                    @case("table")
                        <table class="table wiki-table wiki-element">
                            @foreach( $value->data->content as $tableLine)
                                <tr>
                                    @foreach($tableLine as $tds)
                                        <td>{{ $tds }} </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>
                    @break

                    @case("quote")
                        <div class="wiki-quote wiki-element">
                            <span class="wiki-quote-text"><i class="fas fa-quote-left"></i>{{ $value->data->text }}</span>
                            <span class="small-text wiki-quote-author"> - {{ $value->data->caption }} -</span>
                        </div>
                        @break

                    @default
                        unrecognized data
                @endswitch
            @endforeach
        </div>

        <div class="btn-line-right">
            <button class="btn btn-link small-text text-danger delete-note" id="deleteBtn{{ $note->id }}"  data-toggle="modal" data-target="#noteDeleteModal"  data-route="{{ route('wiki.deleteNote', [$note->id]) }}" ><i class="far fa-trash-alt"></i>supprimer</button>
            <button class="btn btn-link small-text cancel-edition" id="cancelBtn{{ $note->id }}"><i class="fas fa-times"></i>Annuler</button>
            <button class="btn btn-light editNote" data-self="{{$note->id}}"  data-route="{{ route('wiki.getNoteContent') }}" data-route-save="{{ route('wiki.updateNote') }}"><i class="fas fa-pen"></i>Edit</button>
        </div>
    </div>
</div>
@endforeach

@include('AppsViews.boards.wikiview.WikiPartials._modalNoteDeleteConfirm')

{{--   data: {!! $note->content !!},  --}}