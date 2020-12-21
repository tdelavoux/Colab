<div class="option-page-body">
    <h2>Changer de mot de passe</h2>
    <div class="row">
        <form action="{{ route('user.updatePwd') }}" method="post" class="form-infos col-md-6 p-1">
            @csrf
            <div class="form-group">
                <label>Ancien Password</label>
                <input type="password" class="form-control" name="oldpasswd"/>
            </div>

            <div class="form-group">
                <label>Nouveau password</label>
                <input type="password" class="form-control" name="newpasswd"/>
            </div>

            <div class="form-group">
                <label>Confirmer le password</label>
                <input type="password" class="form-control" name="confirmpasswd"/>
            </div>

            <div class="w100 center">
                <button class="btn btn-info w100"><i class="far fa-save"></i>SAUVEGARDER</button>
            </div>
            
        </form>
    </div>
</div>
