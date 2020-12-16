<div class="row sprint">

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
          
            <!---------------------- NOUVELLE TACHE --------------------------->
            <tr class="sprint-table-row">
                <td class="sprint-table-lither"></td>
                <td class="sprint-table-task"> 
                    <input  placeholder=" + Ajouter une tache ici" 
                            class="form-control inputFull inputAddTaskInput" 
                            data-target="{{route('scrum.projectLine') }}" />
                </td>
                <td class="sprint-table-col-std"></td>
                <td class="sprint-table-col-std"></td>
                <td class="sprint-table-col-std" style="background-color:#f5f5f5"><span class="numeric-value total-int" data-ref="intval_12_14">00</span> Heures</td>
                <td class="sprint-table-col-std"></td>
            </tr>  

        </tbody>        
    </table>
</div>

<script>
    initListeners();
</script>