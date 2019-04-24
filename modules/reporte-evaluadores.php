<?php
		
	/* For Session Control - Don't remove this */
	$user->allow_access(44);	
	/* End Session Control */
	//check if docente, 2 == docente
	
	
	$_POST[''] = 42;
    $lstSolicitudes = $course->enumerateCer();
    $lstEvaluadores = $personal->Enumerate();
    /* echo "<pre>";
    print_r($lstEvaluadores);
    echo "</pre>"; */


	
    $smarty->assign('perfil', $_SESSION['User']['perfil']);
    $smarty->assign('lstEvaluadores', $lstEvaluadores);
	/* $smarty->assign('lstMajor', $lstMajor);
	$smarty->assign('arrPage', $arrPage);
	$smarty->assign('coursesCount', $coursesCount); */
	// -------------------------------------------------------------------------------------------------
	
	$smarty->assign('mnuMain','reportes');
	$smarty->assign('mnuSubmain','evaluadores');
?>