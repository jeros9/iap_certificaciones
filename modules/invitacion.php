<?php
	$user->allow_access(50);
	
	$student->setState(7);	
	$periods = $period->Enumerate();
	$smarty->assign("periods", $periods);
    $municipios = $student->EnumerateCiudades();
	$smarty->assign('municipios', $municipios);
	$invitations = $invitation->Enumerate();
	$smarty->assign("invitations", $invitations);
	$smarty->assign('mnuMain','autoridadesElectas');
	$smarty->assign('mnuSubmain','invitacion');	
	
?>