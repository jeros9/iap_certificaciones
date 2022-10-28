<?php
	
	// echo "<pre>"; print_r($_SESSION);
	// exit;
	if($_SESSION["User"]["type"]=="student"){
		
		exit;
	}
	
	
	// $students = $student->enumerateOk();
	$registros = $personal->gruposEvaluador($_GET["id"],$_SESSION["User"]["userId"]);
	
		// echo "<pre>"; print_r($registros);
		// exit;
		
	$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
	$smarty->assign("registros", $registros);	
	$smarty->assign('mnuSubmain','alumnos');
	$smarty->assign("subjectId",$_GET['id']);
	
?>