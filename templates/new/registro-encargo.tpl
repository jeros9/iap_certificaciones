<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-user-plus "></i>Registro de información
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <form id="formRegistro" class="form" method="POST" action="{$WEB_ROOT}/ajax/new/usuarios.php">
                <input type="hidden" name="type" value="registerProspect">
                <div class="form-group col-md-4">
                    <label for="names">Nombre:</label>
                    <input type="text" id="names" name="names" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="firstSurname">Apellido Paterno:</label>
                    <input type="text" id="firstSurname" name="firstSurname" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="secondSurname">Apellido Materno:</label>
                    <input type="text" id="secondSurname" name="secondSurname" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="email">Correo electrónico:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="mobile">Celular:</label>
                    <input type="text" id="mobile" name="mobile" class="form-control">
                </div>
                <div class="col-md-12">
                    <span class="badge badge-dark">
                        <i class="fa fa-build"></i> Datos laborales
                    </span>
                    <hr />
                </div> 
                <div class="form-group col-md-4">
                    <label for="ciudad">Ayuntamiento:</label>
                    <select id="ciudad" name="ciudad" class="form-control">
                        <option value="0">--Selecciona el municipio--</option>
                        {foreach from=$ciudades item=item}
                            <option value="{$item.municipioId}">{$item.nombre}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="commission">Encargo</label>
                    <select name="commission" class="form-control" id="commission">
                        <option value="">--Selecciona uno de los encargos--</option>
                        {foreach from=$commissions item=item}
                            <option value="{$item.id}">{$item.name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="col-md-12">
                    <span class="badge badge-dark">
                        <i class="fa fa-user"></i> Datos del presidente municipal electo
                    </span>
                    <hr />
                </div>
                <div class="form-group col-md-4">
                    <label for="namePresident">Nombre</label>
                    <input class="form-control" id="namePresident" name="namePresident">
                </div>
                <div class="form-group col-md-4">
                    <label for="firstSurnamePresident">Apellido paterno</label>
                    <input class="form-control" id="firstSurnamePresident" name="firstSurnamePresident">
                </div>
                <div class="form-group col-md-4">
                    <label name="secondSurnamePresident">Apellido materno</label>
                    <input class="form-control" id="secondSurnamePresident" name="secondSurnamePresident">
                </div>
                <div class="form-group col-md-4">
                    <label name="emailPresident">Correo electrónico</label>
                    <input class="form-control" id="emailPresident" name="emailPresident">
                </div>
                <div class="form-group col-md-4">
                    <label name="phonePresident">Teléfono</label>
                    <input class="form-control" id="phonePresident" name="phonePresident">
                </div>
                <div class="col-md-12">
                    <span class="badge badge-dark">
                        <i class="fa fa-user"></i> Datos del enlace municipal
                    </span>
                    <hr />
                </div>
                <div class="form-group col-md-4">
                    <label for="nameRepresentative">Nombre</label>
                    <input class="form-control" id="nameRepresentative" name="nameRepresentative">
                </div>
                <div class="form-group col-md-4">
                    <label for="firstSurnameRepresentative">Apellido paterno</label>
                    <input class="form-control" id="firstSurnameRepresentative" name="firstSurnameRepresentative">
                </div>
                <div class="form-group col-md-4">
                    <label name="secondSurnameRepresentative">Apellido materno</label>
                    <input class="form-control" id="secondSurnameRepresentative" name="secondSurnameRepresentative">
                </div>
                <div class="form-group col-md-4">
                    <label name="emailRepresentative">Correo electrónico</label>
                    <input class="form-control" id="emailRepresentative" name="emailRepresentative">
                </div>
                <div class="form-group col-md-4">
                    <label name="phoneRepresentative">Teléfono</label>
                    <input class="form-control" id="phoneRepresentative" name="phoneRepresentative">
                </div>
                <div class="form-group col-md-12 text-center">
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>