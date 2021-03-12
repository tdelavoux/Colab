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

                <div class="input-group mb-3">
                    <input type="text" class="form-control" 
                            placeholder="Nom de l'utilisateur" 
                            aria-label="Nom de l'utilisateur" 
                            id="btn-complete-name" 
                            data-route=" {{ route('team.addMember') }}"
                            data-team=" {{ $fkteam }}"
                            >
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" disabled><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div id="showUsers">
                    <form action="'+ route + '" method="post">
                        @csrf
                        <input type="hidden" name="fk_team" value="{{ $fkteam }}" />
                        <input type="hidden" name="fk_user" value="{{ Auth::user()->id }}" />
                        <button  type="submit" class="btn-link user-chating btn-user">
                            <div class="rounded-circle profile-img-xs admin-target" style="background-image:url('{{ asset(env('DIRUSER')) . '/' . Auth::user()->img }}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>'+
                            <span class="team-user-name"> {{ Auth::user()->name }}  </span>
                        </button>
                    </form>
                </div>
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>