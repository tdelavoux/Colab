@extends('include.layout')

@section('title_page', 'Scrum Board')

@section('content')
<div id="content-page">
    <h1>Projet 1 / Sous Projet 1 / Tableau</h1>

    <button class="btn btn-success">Ajouter un Sprint</button>

    <hr>

    <div class="row sprint">

        <label class="sprint-name" style="color:#4287f5"><i class="fas fa-chevron-circle-right sprint-fold" style="color:#4287f5"></i>sprint 1</label>
        <table class="  sprint-table col-md-12">
            
            <thead >
                <tr class="sprint-table-row sprint-table-header">
                    <th class="sprint-table-lither"></th>
                    <th class="sprint-table-task">Libelle</th>
                    <th class="sprint-table-col-std">Affectation</th>
                    <th class="sprint-table-col-std">Status</th>
                    <th class="sprint-table-col-std">Priority</th>
                    <th class="sprint-table-col-std">deadline</th>
                </tr>       
            </thead>

            <tbody >
                <tr class="sprint-table-row sprint-table-line">
                    <td class="sprint-table-lither" style="background-color:#4287f5"></td>
                    <td class="sprint-table-task"> 
                        <input  value="Libelle bidon 1" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>
                    <td class="sprint-table-col-std">Affectation</td>
                    <td class="sprint-table-col-std">Status</td>
                    <td class="sprint-table-col-std">Priority</td>
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
                    <td class="sprint-table-lither" style="background-color:#4287f5"></td>
                    <td class="sprint-table-task"> 
                        <input  value="Libelle bidon 1" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>
                    <td class="sprint-table-col-std">Affectation</td>
                    <td class="sprint-table-col-std">Status</td>
                    <td class="sprint-table-col-std">Priority</td>
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
                <tr class="sprint-table-row">
                    <td class="sprint-table-lither"></td>
                    <td class="sprint-table-task"> 
                        <input  placeholder=" + Ajouter une tache ici" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>
                    <td class="sprint-table-col-std"></td>
                    <td class="sprint-table-col-std"></td>
                    <td class="sprint-table-col-std"></td>
                    <td class="sprint-table-col-std">
                    </td>
                </tr>  
            </tbody>        
        </table>
    </div>

    <div class="row sprint">

        <label class="sprint-name" style="color:#787B73"><i class="fas fa-chevron-circle-right sprint-fold" style="color:#787B73"></i>sprint 1</label>
        <table class="  sprint-table col-md-12">
            
            <thead >
                <tr class="sprint-table-row sprint-table-header">
                    <th class="sprint-table-lither"></th>
                    <th class="sprint-table-task">Libelle</th>
                    <th class="sprint-table-col-std">Affectation</th>
                    <th class="sprint-table-col-std">Status</th>
                    <th class="sprint-table-col-std">Priority</th>
                    <th class="sprint-table-col-std">deadline</th>
                </tr>       
            </thead>

            <tbody >
                <tr class="sprint-table-row sprint-table-line">
                    <td class="sprint-table-lither" style="background-color:#787B73"></td>
                    <td class="sprint-table-task"> 
                        <input  value="Libelle bidon 1" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>
                    <td class="sprint-table-col-std">Affectation</td>
                    <td class="sprint-table-col-std">Status</td>
                    <td class="sprint-table-col-std">Priority</td>
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
                    <td class="sprint-table-task"> 
                        <input  value="Libelle bidon 1" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>
                    <td class="sprint-table-col-std">Affectation</td>
                    <td class="sprint-table-col-std">Status</td>
                    <td class="sprint-table-col-std">Priority</td>
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
                <tr class="sprint-table-row">
                    <td class="sprint-table-lither"></td>
                    <td class="sprint-table-task"> 
                        <input  placeholder=" + Ajouter une tache ici" 
                                class="form-control inputFull" 
                                data-tache-id=""
                                data-comparative-value=""
                                data-target-modif="" />
                    </td>
                    <td class="sprint-table-col-std"></td>
                    <td class="sprint-table-col-std"></td>
                    <td class="sprint-table-col-std"></td>
                    <td class="sprint-table-col-std">
                    </td>
                </tr>  
            </tbody>        
        </table>
    </div>

</div>

@stop


{{-- 
<div class="sprint-table col-md-12">
    <thead >
        <tr>
            <th class="sprint-table-lither"></th>
            <th><span>Libelle</span></th>
            <th>Affectation</th>
            <th>Status</th>
            <th>Priority</th>
            <th>deadline</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="sprint-table-lither" style="background-color:#4287f5;"></td>

            <td>
                <input  value="Libelle bidon 1" 
                        class="form-control inputFull" 
                        data-tache-id=""
                        data-comparative-value=""
                        data-target-modif="" />
            </td>
            
            <td class="center">
                <div class="rounded-circle profile-img-xs" style="background-image:url('{{asset('/img/user/3.jpg')}}');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </td>

            <td id="selectorStatus_"
                class="center  StatusSelector"
                data-toggle="popover" 
                tabindex="0"
                data-trigger="focus"               
                title="Status selector"
                style="">status
            </td>

            <td id="selectorPriority_"
                class="center   tdSelector PioritySelector"
                data-toggle="popover" 
                tabindex="0"
                data-trigger="focus"               
                title="Priority selector"
                style="">liblle
            </td>
            
            <td class="center">
                <div class="input-group date" data-target-input="nearest">
                    <input  type="text" 
                            name="deadline" 
                            class="datepicker inputFull" />
                        <div class="input-group-append inputFull" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text inputFull"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</div> --}}