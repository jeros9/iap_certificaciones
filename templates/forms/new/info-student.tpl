<center>
    {if $has_photo eq true}
        <img src="{$WEB_ROOT}/alumnos/fotos/{$data_student['curp']}.jpg" width="120" /><br>
        <a type="button" download="{$data_student['curp']}.jpg" href="{$WEB_ROOT}/alumnos/fotos/{$data_student['curp']}.jpg"  class="btn default red">Descargar Foto</a>
    {else}
        <h3>
            <i class="material-icons">warning</i> 
                La foto del alumno no está en el sistema. 
            <i class="material-icons">warning</i>
        </h3>
    {/if}
</center>
<br>
<div class="form-horizontal">
    <div class="form-body">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="3">Datos Personales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>
                                    <b>Nombre:</b><br>
                                    {$data_student['names']}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Apellido Paterno:</b><br>
                                    {$data_student['lastNamePaterno']}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Apellido Materno:</b><br>
                                    {$data_student['lastNameMaterno']}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <b>Correo:</b><br>
                                    {$data_student['email']}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Teléfono:</b><br>
                                    {$data_student['mobile']}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>CURP:</b><br>
                                    {$data_student['curp']}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <b>Domicilio:</b><br>
                                    Calle: {$data_student['street']}<br>
                                    Número: {$data_student['number']}<br>
                                    Colonia: {$data_student['colony']}<br>
                                    Ciudad: {$data_student['ciudad2']}<br>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Código Postal:</b><br>
                                    {$data_student['postalCode']}
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>Último Grado de Estudios:</b><br>
                                    {$data_student['academicDegree']}
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 text-center">
                <button type="button" class="btn default closeModal">Cerrar</button>
            </div>
        </div>
    </div>
</div>