@extends('include.layout')

@section('title_page', 'Bugs Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="#">Projet 1</a> / <a href="#">Sous Projet 1</a> / <a href="#" style="color:#546bc7">Tableau</a></h1>

    <button class="btn btn-success">Ajouter une catégorie</button>
    <button class="btn btn-primary">Ouvrir un ticket</button>

    <hr>

    <div class="row sprint">

        <label class="sprint-name" style="color:#787B73">
            <i class="fas fa-chevron-circle-right sprint-fold pointer faders" data-target="tableSprint" style="color:#787B73"></i>sprint 1
        </label>

        <table id="tableSprint" class="sprint-table col-md-12 show">
            
            <thead >
                <tr class="sprint-table-row sprint-table-header">
                    <th class="sprint-table-lither"></th>
                    <th class="sprint-table-task">Libelle</th>
                    <th class="sprint-table-col-std">Affectation</th>
                    <th class="sprint-table-col-std">Status</th>
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
                        <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
                    </td>

                    <!---------------------- STATUS --------------------------->
                    <td  class="sprint-table-col-std pointer sprintSelector tdSelector statusSelector" style="background-color:#444366;"data-toggle="popover" >
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
                    <input class="form-control" />
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

<script>
    var statusPopoverContent = '<a class="btn BtnSelector sprint-table-col-std" style="color:#fff; background-color:#929292;">Cloturé</a>';
</script>
@stop
