<div class="option-page-body">
    <h2>Informations générales</h2>
    <div class="row">
        <form class="form-infos col-md-6 p-1" action="{{ route('params.board.updateGeneral') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $board->id }}" name="fk_board">
            <div class="form-group">
                <label><i class="fas fa-pencil-alt"></i>Nom du Tableau</label>
                <input type="text" name="libelle" class="form-control" value="{{ $board->libelle }}"/>
            </div>

            <div class="form-group">
                <label><i class="fas fa-palette"></i>Couleur du tableau</label>
                <div class="color-picker" data-target="#inputPicker" initialColor="{{ $board->hexaCode }}"></div>
                <input type="hidden" id="inputPicker" name="hexaColor" value="{{ $board->hexaCode }}">
            </div>

            <div class="form-group">
                <label><i class="far fa-file-alt"></i>Description / objectifs</label>
                <textarea class="form-control limited-area" maxlength="500" name="description">{{ $board->description }}</textarea>
            </div>

            <div class="w100 center">
                <button type="submit" class="btn btn-info w100"><i class="far fa-save"></i>SAUVEGARDER</button>
            </div>
            
        </form>
    </div>
</div>
