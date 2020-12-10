<div class="left-bar-option left-bar-option-second-level">
    <ul class="option-menu-list ">
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <a class="option-menu-list-item-link option-menu-list-item-link-second-level " href="#">ADMIN</a>
        </li>
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <a class="option-menu-list-item-link option-menu-list-item-link-second-level" href="#">UX DESIGNER</a>
        </li>
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <a class="option-menu-list-item-link option-menu-list-item-link-second-level active" href="#">MATKETING</a>
        </li>
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <a class="option-menu-list-item-link option-menu-list-item-link-second-level" href="#">DEVELOPPERS</a>
        </li>
        <li class="option-menu-list-item option-menu-list-item-second-level">
            <button class="btn option-menu-list-item-link option-menu-list-item-link-second-level shadow-none" data-toggle="modal" data-target="#teamAddModal">
                <i class="fas fa-user-plus"></i>AJOUTER
            </button>
        </li>
    </ul>
</div>


<!------------------------ Modal -------------------------------------->
<div class="modal fade" id="teamAddModal" tabindex="-1" role="dialog" aria-labelledby="teamAddModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nouvelle Equipe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nom de l'équipe</label>
                    <input class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Créer</button>
            </div>
        </div>
    </div>
</div>
  