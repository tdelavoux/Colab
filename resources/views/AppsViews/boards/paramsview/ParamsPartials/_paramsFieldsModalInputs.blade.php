<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<form id="addFieldForm" method="POST" action="">
    @csrf
    <input type="hidden" name="fk_board", value="{{ $board->id }}">
    <div class="modal fade" id="addFieldModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un champ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Libelle du champ</label>
                        <input class="form-control" name="libelleChamp" maxlength="50"/>
                    </div>

                    <div class="form-group">
                        <label>type</label>
                        <select class="form-control" name="fkTypeChamp">
                            @foreach($typeFields as $tf)
                                <option value="{{ $tf->id }}">{{ $tf->libelle }}</option>
                            @endforeach
                        </select>
                    </div>     
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Ajouter</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</form>