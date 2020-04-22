<?php
	if($_SESSION["User"]["type"]=="student")
		exit;
	
	$registros = $personal->gruposCapacitador();
		
	$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
	$smarty->assign("registros", $registros);	
	$smarty->assign('mnuSubmain','alumnos');	
	
?>