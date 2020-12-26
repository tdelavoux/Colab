<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<form method="POST" action="{{ route('project.createProject') }} ">
    <div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouveau Projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!----------- formulaire ----------->
                    @csrf
                    <div class="form-group">
                        <label>Libelle</label>
                        <input class="form-control" name="projectName" maxlength="100"/>
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