<?php
// echo "<pre>"; print_r($_POST);
// exit;
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');
session_start();

switch($_POST["type"])
{
	case "getMunicipios":
		$student->setState($_POST["state"]);	
        $municipios = $student->EnumerateCiudades();
        $content = '<option value="0">-- Seleccionar Municipio --</option>';
        foreach($municipios as $item)
            $content .= '<option value="' . $item['municipioId'] . '">' . utf8_encode($item['nombre']) . '</option>';
        echo $content;
		/* $smarty->assign('lstCertificaciones', $lstCertificaciones);
		$smarty->display(DOC_ROOT.'/templates/lists/select-certificaciones.tpl'); */
	break;
}

?>
