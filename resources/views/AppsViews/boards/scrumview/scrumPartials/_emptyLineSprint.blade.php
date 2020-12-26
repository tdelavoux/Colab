<tr class="sprint-table-row sprint-table-line">

    <!---------------------- MODIFIER LIGNE --------------------------->
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
        <input  value="test" 
                class="form-control inputFull" />
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
                <span class="numeric-value">12</span><span class="metric-unit">Heures</span>
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

<script>
    initListeners();
</script>