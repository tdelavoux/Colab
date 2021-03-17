
<div id="createNoteBloc" class="customable-content-page">
    <div id="wiki-note-content"></div>
    <span class="small-text">Cliquez dans le bloc pour ajouter un élément</span>
    <div class="btn-line-right">
        <button class="btn btn-info" id="saveNote" data-route="{{ route('wiki.addNote') }}" data-chapter="{{$chapterInfos->id}}">Enregitrer la note</button>
    </div>
</div>

<script>
    const editor = new EditorJS({
        /**
         * Id of Element that should contain Editor instance
         */
        holder: 'wiki-note-content',

        /** 
         * Available Tools list. 
         * Pass Tool's class or Settings object for each Tool you want to use 
         */ 
        tools: { 
            header: Header, 
            list: List,
            underline: Underline,
            table: {
            class: Table,
            },
            quote: {
                class: Quote,
                inlineToolbar: true,
                shortcut: 'CMD+SHIFT+O',
                config: {
                    quotePlaceholder: 'Enter a quote',
                    captionPlaceholder: 'Quote\'s author',
                },
            },
            checklist: {
            class: Checklist,
            inlineToolbar: true,
            }
        },
    });
</script>