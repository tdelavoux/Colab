
<div class="option-page-body">

    <div class="col-md-12 team-user-bloc-line">
        <div class="rounded-circle profile-img-sm" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        <div class="team-user-infos">
            <span class="team-user-name">Thibault Delavoux</span>
            <span class="team-user-roles">admin, developpeur</span>
            <button class="btn btn-link team-user-delete"><i class="fas fa-user-times"></i>Retirer de l'équipe</button>
        </div>
    </div>

    <div class="col-md-12 team-user-bloc-line">
        <div class="rounded-circle profile-img-sm" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        <div class="team-user-infos">
            <span class="team-user-name">Thibault Delavoux</span>
            <span class="team-user-roles">admin, developpeur</span>
            <button class="btn btn-link team-user-delete"><i class="fas fa-user-times"></i>Retirer de l'équipe</button>
        </div>
    </div>

    <div class="col-md-12 team-user-bloc-line">
        <div class="rounded-circle profile-img-sm" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        <div class="team-user-infos">
            <span class="team-user-name">Thibault Delavoux</span>
            <span class="team-user-roles">admin, developpeur</span>
            <button class="btn btn-link team-user-delete"><i class="fas fa-user-times"></i>Retirer de l'équipe</button>
        </div>
    </div>

    <button class="btn btn-link" data-toggle="modal" data-target="#AssignModale">+ Ajouter des membres</button>

</div>



<!-------------------------------------------------- Modal ---------------------------------------------------------------------------->
<div class="modal fade" id="AssignModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter une assignation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h5>Dejà effecté</h5>

                <div class="user-chating admin-project" data-toggle="modal" data-target="#AssignModale">
                    <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Thibault Delavoux</span>
                </div>

                <hr>

                <h5>Ajouter</h5>

                <div class="user-chating admin-project" data-toggle="modal" data-target="#AssignModale">
                    <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{asset('/img/user/1.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Paul Ochon</span>
                </div>

                <div class="user-chating admin-project" data-toggle="modal" data-target="#AssignModale">
                    <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    <span class="team-user-name">Rachida Dati</span>
                </div>

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>