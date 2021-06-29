<?php
	$user->allow_access(1);
	
	$invitations = $invitation->Enumerate();
	$smarty->assign("invitations", $invitations);
	$smarty->assign('mnuMain','autoridadesElectas');
	$smarty->assign('mnuSubmain','invitacion');	
	
?>