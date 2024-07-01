<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Detalles del prospecto
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <div class="row" style="padding:0 30px;">
            <table class="table">
                <tr>
                    <td>Nombre:</td>
                    <td>{$prospect.name} {$prospect.firstSurname} {$prospect.secondSurname}</td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td>{$prospect.email}</td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td>{$prospect.phone}</td>
                </tr>
                <tr>
                    <td>Ayuntamiento:</td>
                    <td>{$prospect.workplace}</td>
                </tr>
                <tr>
                    <td>Municipio:</td>
                    <td>{$prospect.municipio}</td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:#5e6d6d; color:#ffffff">Datos del presidente municipal</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>{$prospect.namePresident} {$prospect.firstSurnamePresident} {$prospect.secondSurnamePresident}</td>
                </tr>
                <tr>
                    <td>Correo Electrónico</td>
                    <td>{$prospect.emailPresident}</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>{$prospect.phonePresident}</td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:#5e6d6d; color:#ffffff">Datos del enlace municipal</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>{$prospect.nameRepresentative} {$prospect.firstSurnameRepresentative} {$prospect.secondSurnameRepresentative}</td>
                </tr>
                <tr>
                    <td>Correo Electrónico</td>
                    <td>{$prospect.emailRepresentative}</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>{$prospect.phoneRepresentative}</td>
                </tr>
            </table>
        </div>
    </div>
</div>