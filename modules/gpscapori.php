<?php
	if($_SESSION["User"]["type"]=="student")
		exit;
		
	$registros = $personal->gruposCapacitadorOriginal($_SESSION["User"]["userId"]);
	$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
	$smarty->assign("registros", $registros);	
	$smarty->assign('mnuSubmain','alumnos');	
?>