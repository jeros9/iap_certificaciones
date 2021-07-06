<?php
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();
$smarty->assign("DOC_ROOT", DOC_ROOT);


switch($_POST["type"])
{
	case 'reporteProceso': 
        $periodId = $_POST['periodo'];
        $i = 0;
        $period->setPeriodId($periodId);
        $progress = $period->Progress();
        $smarty->assign('progress', $progress);
        $periods = $period->Enumerate();
        $smarty->assign('periods', $periods);
        $smarty->assign('periodo', $periodId);
        $smarty->assign('i', $i);
        $smarty->display(DOC_ROOT.'/templates/lists/new/progreso.tpl');
	    break;
}
?>