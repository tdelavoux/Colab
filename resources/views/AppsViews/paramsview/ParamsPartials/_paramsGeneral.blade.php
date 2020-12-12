<div class="option-page-body">
    <h2>Informations générales</h2>
    <div class="row">
        <form class="form-infos col-md-6 p-1">
            <div class="form-group">
                <label><i class="fas fa-pencil-alt"></i>Nom du Tableau / Projet</label>
                <input type="text" class="form-control" />
            </div>

            <div class="form-group">
                <label><i class="fas fa-palette"></i>Couleur du projet</label>
                <div class="color-picker"></div>
            </div>

            <div class="form-group">
                <label><i class="far fa-file-alt"></i>Description / objectifs</label>
                <textarea class="form-control" ></textarea>
            </div>

            <div class="form-group">
                <label><i class="fas fa-user-tag"></i>Product Owner</label>
                <div class="user-chating param-product-owner" id="param-product-owner" data-toggle="modal" data-target="#OwnersModale">
                    <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Thibault Delavoux</span>
                </div>
            </div>

            <div class="w100 center">
                <button class="btn btn-info w100"><i class="far fa-save"></i>SAUVEGARDER</button>
            </div>
            
        </form>
    </div>
</div>



<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<div class="modal fade" id="OwnersModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Selection du Project Owner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="user-chating admin-project" data-toggle="modal" data-target="#OwnersModale">
                    <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{asset('/img/user/1.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Paul Ochon</span>
                </div>

                <div class="user-chating admin-project" data-toggle="modal" data-target="#OwnersModale">
                    <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Thibault Delavoux</span>
                </div>

                <div class="user-chating admin-project" data-toggle="modal" data-target="#OwnersModale">
                    <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Thibault Delavoux</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>