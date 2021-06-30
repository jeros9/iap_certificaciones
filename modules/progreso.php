<?php
    if($_SESSION["User"]["type"]=="student")
	    exit;
	
    $i = 0;
    $period->setPeriodId(1);
    $progress = $period->Progress();
    //echo "<pre>"; 
    //print_r($progress); exit;
	$smarty->assign('progress', $progress);
    $smarty->assign('i', $i);
    	
	$smarty->assign('mnuMain','proceso');
	$smarty->assign('mnuSubmain','progreso');
?>