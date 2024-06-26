<?php
$student->setState(7);
$ciudades = $student->EnumerateCiudades();
$lstSolicitante = $student->EnumerateSolicitantes();
$smarty->assign('ciudades', $ciudades);

$prof = $profesion->Enumerate();
$prof = $util->EncodeResult($prof);
$smarty->assign('prof', $prof);
$activeCourses = $course->EnumerateActive();
$personalCapacitado = $personal->EnumerateSubject($activeCourses[0]['subjectId']);
$commissions = $util->getCommissions();
$smarty->assign("lstSolicitante", $lstSolicitante);
$smarty->assign("activeCourses", $activeCourses);
$smarty->assign("personalCapacitado", $personalCapacitado);
$smarty->assign("commissions", $commissions);
