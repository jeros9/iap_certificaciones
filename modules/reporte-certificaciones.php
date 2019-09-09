<?php
		
	/* For Session Control - Don't remove this */
	$user->allow_access(45);	
	/* End Session Control */
	//check if docente, 2 == docente
	$lstCertificaciones = $subject->Enumerate();
	$smarty->assign('lstCertificaciones', $lstCertificaciones);
	$smarty->assign('arrPage', $arrPage);
	// -------------------------------------------------------------------------------------------------
	
	$smarty->assign('mnuMain','cursos');
	$smarty->assign('mnuSubmain','historial');
?>