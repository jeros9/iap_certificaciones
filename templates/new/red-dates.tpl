<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-calendar"></i>Fechas Red Conocer 
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body">
    <div id="tblContent">   
    </div>
    <form class="form" id="form_dates" action="{$WEB_ROOT}/ajax/new/red-dates.php">
        <input type="hidden" name="course" value="{$course}">
        <input type="hidden" name="subject" value="{$subject}">
        <table class="tblGral table table-bordered table-striped table-condensed flip-content">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Fecha Plan</th>
                    <th>Fecha Evaluación</th>
                    <th>Fecha IEC</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$students item=student}
                <tr>
                    <td>{$student.names} {$student.lastNamePaterno} {$student.lastNameMaterno}</td>
                    <td>
                        <input name="plan[{$student.userId}]" value="{$student.plan_date|date_format:"d-m-Y"}" class="date-picker" required autocomplete="off">
                    </td>
                    <td>
                        <input name="evaluation[{$student.userId}]" value="{$student.evaluation_date|date_format:"d-m-Y"}" class="date-picker" required autocomplete="off">
                    </td>
                    <td>
                        <input name="iec[{$student.userId}]" value="{$student.iec_date|date_format:"d-m-Y"}" class="date-picker" required autocomplete="off">
                    </td>
                </tr>
            {/foreach}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align: right;">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
    </div>
</div>