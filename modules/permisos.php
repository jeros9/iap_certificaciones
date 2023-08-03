<?php
if ($_POST) {
    $municipio = $student->enumerateMunicipio(7, "AND municipioId = '{$_POST['municipio']}' ");
    $student->setCiudadT($municipio[0]['municipioId']);
    $permiso = $municipio[0]['permiso'] == 0 ? 1 : 0;
    $student->actualizarPermisoMunicipio($permiso);  
}
$municipios_bloqueados =  $student->enumerateMunicipio(7,"AND permiso = 0"); 
$municipios_permitidos =  $student->enumerateMunicipio(7,"AND permiso = 1"); 
$smarty->assign("municipios_bloqueados", $municipios_bloqueados);
$smarty->assign("municipios_permitidos", $municipios_permitidos);
if($_POST){
    print_r(json_encode([
        'growl'     =>true,
        'message'   =>'Municipio actualizado', 
        'selector'  =>'#municipios',
        'html'      =>$smarty->fetch(DOC_ROOT."/templates/lists/new/municipios.tpl")
    ]));
    exit;
}
?>