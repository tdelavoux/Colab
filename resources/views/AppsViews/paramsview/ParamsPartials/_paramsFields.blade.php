<div class="left-bar-option left-bar-option-second-level">
    <ul class="option-menu-list ">
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level " href="#">SCRUM</a></li>
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level" href="#">KABAN</a></li>
        <li class="option-menu-list-item option-menu-list-item-second-level"><a class="option-menu-list-item-link option-menu-list-item-link-second-level active" href="#">ISSUES</a></li>
    </ul>
</div>

<div class="option-page-body">
    <h2>CHAMPS PERSONNALISEES</h2>

    <!-- --------------- LOGS ------------------------->
    <div class="habilitation-bloc col-md-12">
        <div class="habilitation-line">
            <div class="habilitation-bloc-header" >
                <span class="fields-bloc-title"> Status</span>
                <button class="btn btn-secondary">Ajouter une valeur</button>
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