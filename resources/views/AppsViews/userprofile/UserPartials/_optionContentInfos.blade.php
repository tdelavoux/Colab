<div class="option-page-body">
    <h2>Informations du compte</h2>
    <div class="row">
        <div class="column-info col-md-3">
            <div class="column-info-sub">
                <div class="rounded-circle profile-img-lg" style="background-image:url('{{env('DIR')}}/img/user/3.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                <button class="btn btn-secondary mv-1"><i class="fas fa-camera-retro"></i>Changer la photo</button>
                <a href="#" class="small-text mb-2 italic">image par défault</a>
                <span class="info-txt c-red"><i class="fas fa-project-diagram"></i>10 Projets</span>
                <span class="info-txt c-yellow-heavy"><i class="far fa-star"></i>125 Stars</span>
            </div>
        </div>

        <form class="form-infos col-md-6 p-1">
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" class="form-control" name="name" value="Glopulus"/>
            </div>

            <div class="form-group">
                <label>Nom Prenom</label>
                <input type="text" class="form-control" name="name" value="Glopulus"/>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="name" value="Glopulus"/>
            </div>

            <div class="form-group">
                <label>Theme</label>
                <select type="text" class="form-control" name="name" value="Glopulus">
                    <option>Classique</option>
                </select>
            </div>

            <div class="form-group">
                <label>Bio</label>
                <textarea class="form-control" name="name" value="Glopulus"></textarea>
            </div>

            <div class="w100 center">
                <button class="btn btn-success w100"><i class="far fa-save"></i>SAUVEGARDER</button>
            </div>
            
        </form>
    </div>
</div>