<?php
	
	/* For Session Control - Don't remove this */
	$user->allow_access(49);	
	/* End Session Control */
	
	$dictums = $dictum->Enumerate();	
	$smarty->assign('dictums', $dictums);
	$smarty->assign('mnuMain','catalogos');
	$smarty->assign('mnuSubmain','dictamenes');	
	
?>