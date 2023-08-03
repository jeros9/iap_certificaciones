<div class="col-md-6">
    <table class="table" id="bloqueados">
        <thead>
            <tr>
                <th colspan="2">
                    <h4><b>Municipios con descarga bloqueada</b></h4>
                </th>
            </tr>
            <tr>
                <th>Municipio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$municipios_bloqueados item=item}
                <tr>
                    <td>{utf8_encode($item.nombre)}</td>
                    <td>
                        <form class="form d-inline" id="form_permitir{$item.municipioId}" action="{$WEB_ROOT}/permisos"
                            method="POST">
                            <input type="hidden" name="municipio" value="{$item.municipioId}">
                            <button class="btn btn-sm btn-success" type="submit">Permitir</button>
                        </form>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
<div class="col-md-6">
    <table class="table" id="permitidos">
        <thead>
            <tr>
                <th colspan="2">
                    <h4><b>Municipios con descarga permitida</b></h4>
                </th>
            </tr>
            <tr>
                <th>Municipio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$municipios_permitidos item=item}
                <tr>
                    <td>{utf8_encode($item.nombre)}</td>
                    <td>
                        <form class="form d-inline" id="form_bloquear{$item.municipioId}" action="{$WEB_ROOT}/permisos"
                            method="POST">
                            <input type="hidden" name="municipio" value="{$item.municipioId}">
                            <button class="btn btn-sm btn-danger" type="submit">Bloquear</button>
                        </form> 
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>