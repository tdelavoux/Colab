<!------------------------ Modal -------------------------------------->
<form action="{{ route('team.create') }}" method="POST">
    @csrf
    <input type="hidden" name="fk_project" value="{{ $project->id }}">
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
                        <input class="form-control" name="teamName" maxlength="50">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </div>
        </div>
    </div>
</form>
