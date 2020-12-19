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
            <div role="button" class="sprint-name" style="color:#787B73">
                <span class="collapse-arrrow collapsable"  data-toggle="collapse" data-target="#tableSprint" ><i class="fas fa-chevron-circle-down"></i></span>
                <span >sprint 1</span>
                <a class="sprint-name-modify" data-toggle="modal" data-target="#Modifysprint"><i class="fas fa-pencil-alt"></i></a>
            </div>
    
            <table id="tableSprint" class="sprint-table col-md-12 collapse show">
            
                <thead >
                    <tr class="sprint-table-row sprint-table-header">
                        <th class="sprint-table-action"></th>
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
                    <tr class="sprint-table-row sprint-table-line" id="125">
                        <td href="#" data-toggle="dropdown" class="sprint-table-action" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-sort-down"></i></a>
                            <ul class="dropdown-menu scrum-action-dropdown">
                                <li class="scrum-action-column-title">Actions sur la tâche</li>
                                <div class="divider"></div>
                                <li class="scrum-action-column" data-toggle="modal" data-target="#reorgLine"><span>Envoyer vers</span></li>
                                <li class="scrum-action-column deleteScrumLine" data-line-target="#125"><span>Archiver</span></li>
                            </ul>
                        </td>

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
                        
                        <td href="#" data-toggle="dropdown" class="sprint-table-action" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-sort-down"></i></a>
                            <ul class="dropdown-menu scrum-action-dropdown">
                                <li class="scrum-action-column-title">Actions sur la tâche</li>
                                <div class="divider"></div>
                                <li class="scrum-action-column" data-toggle="modal" data-target="#reorgLine"><span>Envoyer vers</span></li>
                                <li class="scrum-action-column deleteScrumLine" data-line-target="#125"><span>Archiver</span></li>
                            </ul>
                        </td>

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

@include('AppsViews.scrumview.scrumPartials._modaleAssignUser')
@include('AppsViews.scrumview.scrumPartials._modaleReorgScrumLine')
@include('AppsViews.scrumview.scrumPartials._modaleScrumSprint')

<script>
    var statusPopoverContent = '<a class="btn BtnSelector sprint-table-col-std" style="color:#fff; background-color:#929292;">Libelle2</a>';
</script>

@stop

@section('addJS')
<script type="text/javascript" src="{{ asset('js/Scrum.js') }}"></script>
@stop
