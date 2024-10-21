<?php
	
	/* For Session Control - Don't remove this */
	//$user->allow_access(4);	
	/* End Session Control */
$student->setCountry(1);
$estados = $student->EnumerateEstados();
$lstSolicitante=$student->EnumerateSolicitantes();	

$smarty->assign('paises',$paises);
$smarty->assign('estados',$estados);

$prof = $profesion->Enumerate();
$prof = $util->EncodeResult($prof);
$smarty->assign('prof',$prof);
$activeCourses = $course->EnumerateActive();
$personalCapacitado = $personal->EnumerateSubject($activeCourses[0]['subjectId']); 
$smarty->assign("lstSolicitante", $lstSolicitante);	
$smarty->assign("activeCourses", $activeCourses);	
$smarty->assign("personalCapacitado",$personalCapacitado);
	
?>