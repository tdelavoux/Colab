<div class="left-bar-option left-bar-option-second-level">
    <ul class="option-menu-list ">
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level " href="#">SCRUM</a></li>
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level" href="#">KABAN</a></li>
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level active" href="#">ISSUES</a></li>
    </ul>
</div>

<div class="option-page-body">
    <h2>CHAMPS PERSONNALISEES</h2>

    <div class="btn-line-right mb-1">
        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addFieldModal">Ajouter un champ</button>
    </div>
    
    <div class="habilitation-bloc col-md-12">
        <div class="habilitation-line">
            <div class="habilitation-bloc-header" >
                <span class="fields-bloc-title"> Status</span>
                <button class="btn btn-secondary" data-toggle="modal" data-target="#addValueModal">Ajouter une valeur</button>
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
                    <tr>
                        <td>En attente</td>
                        <td><div class="color-picker"></div></td>
                        <td><input type="checkbox" /></td>
                        <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr> 

                    <tr>
                        <td>En cours</td>
                        <td><div class="color-picker"></div></td>
                        <td><input type="checkbox" /></td>
                        <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr> 

                    <tr>
                        <td>En attente de tests</td>
                        <td><div class="color-picker"></div></td>
                        <td><input type="checkbox" /></td>
                        <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr> 

                    <tr>
                        <td>Cloturé</td>
                        <td><div class="color-picker"></div></td>
                        <td><input type="checkbox" /></td>
                        <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>

                    <tr>
                        <td>Bloqué</td>
                        <td><div class="color-picker"></div></td>
                        <td><input type="checkbox" /></td>
                        <td><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr> 

                </tbody>
            </table>
        </div>
    </div>

    <div class="habilitation-line">
        <div class="habilitation-bloc-header" >
            <span class="fields-bloc-title"> Métrique de coût</span>
        </div>

        <div class="inline-radio mt-1">
            <div class="inline-radio-option"><input type="radio" class="funkyRadio" name="visit2"><label>Heures (H)</label></div>
            <div class="inline-radio-option"><input type="radio" class="funkyRadio" name="visit2"><label>Jours (J)</label></div>
            <div class="inline-radio-option"><input type="radio" class="funkyRadio" name="visit2"checked><label>Points (Pts)</label></div>
        </div>
    </div>

</div>



<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
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
                    <label>Libelle colone</label>
                    <input class="form-control" />
                </div>

                <div class="form-group">
                    <label>type</label>
                    <select class="form-control">
                        <option>Numérique</option>
                        <option>Liste</option>
                        <option>Texte</option>
                        <option>Date</option>
                    </select>
                </div>     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Ajouter</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
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
                    <input class="form-control" />
                </div>

                <div class="form-group">
                    <label>Couleur</label>
                    <div class="color-picker"></div>
                </div>     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Ajouter</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>