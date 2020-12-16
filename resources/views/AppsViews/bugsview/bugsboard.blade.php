@extends('include.layout')

@section('title_page', 'Bugs Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="#">Projet 1</a> / <a href="#">Sous Projet 1</a> / <a href="#" style="color:#546bc7">Tableau</a></h1>

    <div class="btn-line-right">
        <button class="btn btn-sm btn-success">Ajouter une catégorie</button>
        <button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#ticketsInfos">Ouvrir un ticket</button>
    </div>

    <hr>

    <div class="scrum-option-line" >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i></a>
        <ul class="dropdown-menu scrum-option-dropdown">
            <li class="scrum-option-column active" column-target="status">
                <span>Status</span> 
                <i class="fas fa-check"></i>
            </li>
            <div class="divider"></div>
            <li class="scrum-option-column active" column-target="priority">
                <span>Priority</span> 
                <i class="fas fa-check"></i>
            </li>
        </ul>
    </div>

    <div class="row sprint">

        <div role="button" class="sprint-name collapsable" style="color:#787B73" data-toggle="collapse" data-target="#tableSprint">
            <span class="collapse-arrrow" ><i class="fas fa-chevron-circle-down"></i></span>
            <span>Erreurs fonctionnelles</span>
        </div>

        <table id="tableSprint" class="sprint-table col-md-12 collapse show">
            
            <thead >
                <tr class="sprint-table-row sprint-table-header">
                    <th class="sprint-table-lither"></th>
                    <th class="sprint-table-task">Libelle</th>
                    <th class="sprint-table-col-std">Affectation</th>
                    <th class="sprint-table-col-std status">Status</th>
                    <th class="sprint-table-col-std">Details</th>
                </tr>       
            </thead>

            <tbody >
                <tr class="sprint-table-row sprint-table-line">
                    <td class="sprint-table-lither" style="background-color:#787B73"></td>

                    <!---------------------- LIBELLE DE TACHE --------------------------->
                    <td class="sprint-table-task"> 
                        <input  value="Libelle bidon 1" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>

                    <!---------------------- ACTEUR ASSIGNE --------------------------->
                    <td class="sprint-table-col-std">
                        <a role="button" data-toggle="modal" data-target="#AssignModale" class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></a>
                    </td>

                    <!---------------------- STATUS --------------------------->
                    <td  class="sprint-table-col-std pointer sprintSelector tdSelector statusSelector status" style="background-color:#444366;"data-toggle="popover" >
                        En Cours
                    </td>     

                    <!---------------------- DETAILS --------------------------->
                    <td class="sprint-table-col-std">
                       <button class="btn btn-link" data-toggle="modal" data-target="#ticketsInfos"> Voir le ticket </button>
                    </td>

                </tr>  

            </tbody>        
        </table>
    </div>

</div>



<!----------------------------------------------- MODALE ---------------------------------------------------------->
<div id="ticketsInfos" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">ISSUE #INC0000001</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>       
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label>Nom du demandeur</label>
                    <input class="form-control" />
                </div>

                <div class="form-group">
                    <label>Contact du demandeur</label>
                    <input class="form-control" />
                </div>

                <div class="form-group">
                    <label>Date de soumission</label>
                    <input class="form-control datepicker" />
                </div>

                <div class="form-group">
                    <label>Détails</label>
                    <textarea class="form-control"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
  
    </div>
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



<script>
    var statusPopoverContent = '<a class="btn BtnSelector sprint-table-col-std" style="color:#fff; background-color:#929292;">Cloturé</a>';
</script>
@stop


@section('addJS')
<script type="text/javascript" src="{{ asset('js/Scrum.js') }}"></script>
@stop
