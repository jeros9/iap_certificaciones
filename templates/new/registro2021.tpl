<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-user-plus "></i> Registro de Información
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContent">
            <div class="row">
                <form id="addForm2021" name="addStudentForm" method="POST">
                    <input type="hidden" id="type" name="type" value="saveAddRegister2021"/>
                    <input type="hidden" id="redireccion" name="redireccion" value="1"/>
                    <input type="hidden" id="tam" name="tam" value="0"/>
                    <input type="hidden" id="permiso" name="permiso" value="0"/>
                        <div class="form-group col-md-4">
                            <label for="names">Nombre:</label>
                            <input type="text" id="names" name="names" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="firstLastname">Apellido Paterno:</label>
                            <input type="text" id="firstLastname" name="firstLastname" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="secondLastname">Apellido Materno:</label>
                            <input type="text" id="secondLastname" name="secondLastname" class="form-control">
                        </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Celular:</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="municipality">Municipio:</label>
                        <select id="municipality" name="municipality" class="form-control">
                            <option value="0">Selecciona....</option>
                            {foreach from=$municipios item=item}
                                <option value="{$item.municipioId}">{$item.nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                </form>
            </div>
            <div id="loader"></div>
            <center>
                <div class="">
                    <div class="">
                        <br><br><br>
                        <button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn green submitForm" onclick="AddRegister2021();" id="addStudent" >Guardar</button>
                    </div>
                </div>
            </center>
            <br><br>        
        </div>
    </div>
</div>