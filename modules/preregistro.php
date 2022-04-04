<?php
$invitation->setPeriodId(6);	
$paises = $invitation->EnumerateCiudades();	
$lstSolicitante=$student->EnumerateSolicitantes();	

$smarty->assign('paises',$paises);

$orders = $pcOrder->Enumerate();
$orders = $util->EncodeResult($orders);
$smarty->assign('orders', $orders);
$activeCourses = $course->EnumerateActive();
$smarty->assign("lstSolicitante", $lstSolicitante);	
$smarty->assign("activeCourses", $activeCourses);