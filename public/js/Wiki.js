$('.delete-note').hide();
$('.cancel-edition').hide();

$('#saveNote').click(function(){

    var route       = $(this).attr('data-route');
    var fkChapter   = $(this).attr('data-chapter');

    editor.save().then((outputData) => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: route,
            type:"post",
            data:{txt:JSON.stringify(outputData), fk_wiki_chapter:fkChapter },
            success: function (result) {
                window.location.reload();
            }
        });
    }).catch((error) => {
        console.log('Saving failed: ', error)
    });
});

$('.delete-note').click(function(){
    $('#deleteButton').attr('href', $(this).attr('data-route'));
});

function updateNoteListener(){
    
    $('.editNote').click(function(){

        var btnNote = $(this);
        var self = btnNote.attr('data-self');
        var route = btnNote.attr('data-route');
        var routeSave = btnNote.attr('data-route-save');

        $('.editNote').unbind();
        $('#createNoteBloc').html("");
        editUnavailableListener();

        // Loading des datas de la note
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: route,
            type:"post",
            dataType: 'json',
            data:{fk_wiki_note:self},
            success: function (result) {

                // apparition du bouton de suppression et du bloc de création
                $('#deleteBtn' + self).show();
                $('#cancelBtn' + self).show();
                $('#wiki-note-content_' + self).html(""); // TODO ajouter un loader


                // Création du nouvel éditeur
                editor.destroy();
                const editorNew = new EditorJS({
                    /**
                     * Id of Element that should contain Editor instance
                     */
                    holder: 'wiki-note-content_' + self,

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
                    data: JSON.parse(result),
                });

                btnNote.html('<i class="far fa-save"></i> Sauvegarder');
                btnNote.removeClass('editNote');
                btnNote.addClass('saveNote');
                btnNote.click(function(){
                    editorNew.save().then((outputData) => {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('input[name="_token"]').val()
                            },
                            url: routeSave,
                            type:"post",
                            data:{txt:JSON.stringify(outputData), fk_wiki_note:self },
                            success: function (result) {
                                window.location.reload();
                            }
                        });
                    }).catch((error) => {
                        console.log('Saving failed: ', error)
                    });
                });
            }
        });

        
    });
}
updateNoteListener();


function editUnavailableListener(){
    $('.editNote').click(function(){
        $.notify('Une note est déjà en cours d\'édition.', "error");
    });
}

function cancelEdition(){
    $('.cancel-edition').click(function(){
        window.location.reload();
    });
}
cancelEdition();