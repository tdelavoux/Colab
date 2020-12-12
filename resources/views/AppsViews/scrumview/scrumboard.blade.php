@extends('include.layout')

@section('title_page', 'Scrum Board')

@section('content')
<div id="content-page">
    <h1 class="prohect-map-title"><i class="fas fa-sitemap"></i><a href="#">Projet 1</a> / <a href="#">Sous Projet 1</a> / <a href="#" style="color:#546bc7">Tableau</a></h1>

    <button class="btn btn-success">Ajouter un Sprint</button>

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
                    <th class="sprint-table-col-std">Priority</th>
                    <th class="sprint-table-col-std">deadline</th>
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
                        Libelle1
                    </td>     

                    <!---------------------- PRIORITE --------------------------->
                    <td class="sprint-table-col-std pointer sprintSelector tdSelector statusSelector" style="background-color:#444366;"data-toggle="popover" >
                        Libelle1
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
<script>
    var statusPopoverContent = '<a class="btn BtnSelector sprint-table-col-std" style="color:#fff; background-color:#929292;">Libelle2</a>';
    var statusPopoverContent = '<a class="btn BtnSelector sprint-table-col-std" style="color:#fff; background-color:#929292;">Libelle2</a>';
</script>
@stop
