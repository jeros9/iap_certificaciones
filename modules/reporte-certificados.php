<?php
    $user->allow_access(45);	
	
    $i = 0;
    $no = 1;
    $period->setPeriodId(1);
    $progress = $period->Progress();
    //echo "<pre>"; 
    //print_r($progress); exit;
	$smarty->assign('progress', $progress);
    $periods = $period->Enumerate();
    $smarty->assign('periods', $periods);
    $smarty->assign('periodo', $_GET['periodo']);
    $smarty->assign('i', $i);
    $smarty->assign('no', $no);
    	
	$smarty->assign('mnuMain','proceso');
	$smarty->assign('mnuSubmain','reporteCertificados');
?>