<?php
session_start();
$estudiante = $_SESSION["User"];
$student->setUserId($estudiante["userId"]);
if ($_POST) {
    $student->setCiudadT($_POST['municipio']);
    $student->setEstadoT($_POST['estadotId']);
    $respuesta = $student->ActualizarEstadoMunicipio();
    if(isset($respuesta['municipio'])){
        $_SESSION["User"]['municipio'] = $respuesta['municipio'];
        $_SESSION["User"]['estado'] = $respuesta['estado'];
        $_SESSION["User"]['municipioId'] = $_POST['municipio'];
        $_SESSION["User"]['estadoId'] = $_POST['estadotId'];
    }
    echo json_encode([
        'growl'     => true,
        'message'   => 'Información actualizada',
        'type'      => 'success',
        'reload'    => true
    ]);  
    exit;
}

$student->setCountry(1);
$lstEstados = $student->EnumerateEstados();
$lstMunicipios = $student->enumerateMunicipio($estudiante['estadoId']);
$smarty->assign("lstt", $lstt);
$smarty->assign('estudiante', $estudiante);
$smarty->assign("lstEstados", $lstEstados);
$smarty->assign("lstMunicipios", $lstMunicipios);
