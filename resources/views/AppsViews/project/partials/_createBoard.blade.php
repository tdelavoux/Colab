<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<form method="POST" action="{{ route('board.createBoard') }} ">
    <div class="modal fade" id="addBoard" tabindex="-1" role="dialog" aria-labelledby="addBoard" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouveau Tableau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!----------- formulaire ----------->
                    @csrf
                    <input type="hidden" name="fkProject" value="{{ $project['id'] }}">
                    <div class="form-group">
                        <label>Libelle</label>
                        <input class="form-control" name="BoardName" maxlength="100"/>
                    </div>

                    <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control limited-area" name="description" maxlength="500"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Couleur</label>
                        <div class="color-picker" data-target="#inputPicker"></div>
                        <input type="hidden" id="inputPicker" name="hexaColor" value="">
                    </div> 
                    <!----------- /formulaire ---------->   
                    
                </div>
                <div class="modal-footer">      
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success" >Créer</button>
                </div>
            </div>
        </div>
    </div>
</form> 