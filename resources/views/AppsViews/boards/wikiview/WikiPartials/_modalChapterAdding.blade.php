<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<form action="{{ route('wiki.addChapter') }}" method="post">
    @csrf
    <div class="modal fade" id="chapterAddModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Créer un Chapitre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="fk_tableau" value="{{ $board->id }}">
                    <div class="form-group">
                        <label>Titre du chapitre</label>
                        <input class="form-control" name="name" maxlength="50"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Valider</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</form>