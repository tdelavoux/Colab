<div class="option-page-body">
    <h2>Informations du compte</h2>
    <div class="row">
        <div class="column-info col-md-2">
            <div class="column-info-sub">
                <div class="rounded-circle profile-img" style="background-image:url('{{ asset(env('DIRUSER')) . '/' . Auth::user()->img }}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                <button class="btn btn-secondary mv-1" data-toggle="modal" data-target="#changePict"><i class="fas fa-camera-retro"></i>Changer la photo</button>
                <a href="#" class="small-text mb-2 italic">image par défault</a>
                <span class="info-txt c-red"><i class="fas fa-project-diagram"></i>10 Projets</span>
                <span class="info-txt c-yellow-heavy"><i class="far fa-star"></i>125 Stars</span>
            </div>
        </div>

        <form method="post" action="{{ route('user.updateAccount') }} " class="form-infos col-md-6 p-1">
            @csrf
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" class="form-control" name="nom" value="{{ Auth::user()->name }}"/>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}"/>
            </div>

            <div class="form-group">
                <label>Theme</label>
                <select type="text" class="form-control" name="theme" disabled>
                    <option>Classique</option>
                </select>
            </div>

            <div class="form-group">
                <label>Bio</label>
                <textarea class="form-control" name="bio">{{ Auth::user()->bio }}</textarea>
            </div>

            <div class="w100 center">
                <button class="btn btn-info w100"><i class="far fa-save"></i>SAUVEGARDER</button>
            </div>
            
        </form>
    </div>



    <!------------------------------ CHANGEMENT DE PHOTO ------------------------------------------------->
    <form role="form" action="#" method="POST" enctype="multipart/form-data"> 
        <div class="modal fade" id="changePict" tabindex="-1" role="dialog" aria-labelledby="changePict" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouvelle photo de profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="col-md-12">  
                            <legend>Ajouter une image</legend> 
                            <div class="row justify-content-md-center img-picker-body">
                                <div class="form-group col-3 flex-center"> 
                                    <div class="img-picker"></div>
                                </div>   
                            </div>   
                            
                            <div id="test" style="display:none;"></div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </form> 


    <!------------------------------ CHANGEMENT DE PHOTO ------------------------------------------------->
    <form role="form" action="#" method="POST" enctype="multipart/form-data"> 
        <div class="modal fade" id="changePict" tabindex="-1" role="dialog" aria-labelledby="changePict" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle photo de profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-md-12">  
                        <legend>Ajouter une image</legend> 
                        <div class="row justify-content-md-center img-picker-body">
                            <div class="form-group col-3 flex-center"> 
                                <div class="img-picker"></div>
                            </div>   
                        </div>   
                        
                        <div id="test" style="display:none;"></div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
        </div>
    </form> 
</div>