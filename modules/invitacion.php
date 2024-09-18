<?php
	$user->allow_access(50);
	
	$periodId = intval($_GET['id']);
	$student->setState(7);	
	$periods = $period->Enumerate();
	$smarty->assign("periods", $periods);
    $municipios = $student->EnumerateCiudades();
	$smarty->assign('municipios', $municipios);
	$invitations = $invitation->Enumerate($periodId);
	$smarty->assign("invitations", $invitations);
	$smarty->assign('mnuMain','autoridadesElectas');
	$smarty->assign('mnuSubmain','invitacion');	
	$smarty->assign('periodId',$periodId);	
	
?>