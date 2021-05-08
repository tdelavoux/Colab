<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<form id="addFieldValue" method="POST" action="">
    @csrf
    <input type="hidden" id="fkScrumInput" name="fkScrumInput">
    <div class="modal fade" id="addValueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter une valeur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Libelle</label>
                        <input class="form-control" name="libelle" maxlength="50"/>
                    </div>

                    <div class="form-group">
                        <label>Couleur</label>
                        <div class="color-picker" data-target="#inputPickerPdfVal"></div>
                        <input type="hidden" id="inputPickerPdfVal" name="hexaColor">
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