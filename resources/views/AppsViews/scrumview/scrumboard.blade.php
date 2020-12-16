@extends('include.layout')

@section('title_page', 'Scrum Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="#">Projet 1</a> / <a href="#">Sous Projet 1</a> / <a href="#" style="color:#546bc7">Tableau</a></h1>

    <div class="btn-line-right">
        <button class="btn btn-sm btn-success addSprint" data-target="{{ route('scrum.projectSprint') }}" >Ajouter un groupe de tâches</button>
    </div>

    <hr>

    <!---------- COLUMNS OPTIONS ------------> 
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

    <div id="sprints-collum">
        <div  class="row sprint">
            <div role="button" class="sprint-name collapsable" style="color:#787B73" data-toggle="collapse" data-target="#tableSprint">
                <span class="collapse-arrrow" ><i class="fas fa-chevron-circle-down"></i></span>
                <span>sprint 1</span>
            </div>
    
            <table id="tableSprint" class="sprint-table col-md-12 collapse show">
            
                <thead >
                    <tr class="sprint-table-row sprint-table-header">
                        <th class="sprint-table-lither"></th>
                        <th class="sprint-table-task">Libelle</th>
                        <th class="sprint-table-col-std center">Affectation</th>
                        <th class="sprint-table-col-std center status">Status</th>
                        <th class="sprint-table-col-std center priority">Priority</th>
                        <th class="sprint-table-col-std center">Cost</th>
                        <th class="sprint-table-col-std center">deadline</th>
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
                            <a role="button" class="profile-img-xs" data-toggle="modal" data-target="#AssignModale"><i class="fas fa-user-plus"></i></a>
                        </td>
    
                        <!---------------------- STATUS --------------------------->
                        <td  class="sprint-table-col-std pointer sprintSelector tdSelector statusSelector status" style="background-color:#444366;"data-toggle="popover" >
                            Libelle1
                        </td>     
    
                        <!---------------------- PRIORITE --------------------------->
                        <td class="sprint-table-col-std pointer sprintSelector tdSelector statusSelector priority" style="background-color:#444366;"data-toggle="popover" >
                            Libelle1
                        </td>
    
                        <!---------------------- COST --------------------------->
                        <td class="sprint-table-col-std">
                            <div class="numeric-cell-compnent">
                                <div class="editable-component">
                                    <span class="numeric-value intval_12_14">12</span><span class="metric-unit">Heures</span>
                                </div>
                            </div>
                        </td>
    
                        <!---------------------- DATE PICKER--------------------------->
                        <td class="sprint-table-col-std">
                            <div class="datePickerInput">
                                <input  type="text" 
                                        name="deadline" 
                                        class="datepicker inputFull" 
                                        style="max-width:170px;"/>
                                <i class="fa fa-calendar date-picker-icon"></i>
                            </div>
                        </td>
                    </tr>  
    
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
                            Libelle1
                        </td>     
    
                        <!---------------------- PRIORITE --------------------------->
                        <td class="sprint-table-col-std pointer sprintSelector tdSelector statusSelector priority" style="background-color:#444366;"data-toggle="popover" >
                            Libelle1
                        </td>
    
                        <!---------------------- COST --------------------------->
                        <td class="sprint-table-col-std">
                            <div class="numeric-cell-compnent">
                                <div class="editable-component">
                                    <span class="numeric-value intval_12_14">12</span><span class="metric-unit">Heures</span>
                                </div>
                            </div>
                        </td>
    
                        <!---------------------- DATE PICKER--------------------------->
                        <td class="sprint-table-col-std">
                            <div class="datePickerInput">
                                <input  type="text" 
                                        name="deadline" 
                                        class="datepicker inputFull" 
                                        style="max-width:170px;"/>
                                <i class="fa fa-calendar date-picker-icon"></i>
                            </div>
                        </td>
                    </tr>  
                    
                    <!---------------------- NOUVELLE TACHE --------------------------->
                    <tr class="sprint-table-row">
                        <td class="sprint-table-lither"></td>
                        <td class="sprint-table-task"> 
                            <input  placeholder=" + Ajouter une tache ici" 
                                    class="form-control inputFull inputAddTaskInput" 
                                    data-target="{{route('scrum.projectLine') }}" 
                                    />
                        </td>
                        <td class="sprint-table-col-std"></td>
                        <td class="sprint-table-col-std"></td>
                        <td class="sprint-table-col-std" style="background-color:#f5f5f5"><span class="numeric-value total-int" data-ref="intval_12_14">00</span> Heures</td>
                        <td class="sprint-table-col-std"></td>
                    </tr>  
    
                </tbody>        
            </table>
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
    var statusPopoverContent = '<a class="btn BtnSelector sprint-table-col-std" style="color:#fff; background-color:#929292;">Libelle2</a>';
</script>

@stop

@section('addJS')
<script type="text/javascript" src="{{ asset('js/Scrum.js') }}"></script>
@stop
