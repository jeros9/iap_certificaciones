<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i> Asistencia de Usuarios
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Canditato</th>
                        <th>Certificaci&oacute;n</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$group item=item}
                        <tr>
                            <td>{$item.completeName}</td>
                            <td>{$item.subjectName} [{$item.courseName}]</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>