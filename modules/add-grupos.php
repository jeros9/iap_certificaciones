<?php
	$user->allow_access(37);
	$rsubjects =$major->Enumerate();
	$resultC = $course->EnumerateCertificacions();

	$cursos = $subject->Enumerate();
	$smarty->assign('rsubjects', $rsubjects);
	$smarty->assign('cursos', $cursos);
	$empleados = $personal->Enumerate('lastname_paterno');
	$smarty->assign('empleados', $empleados);
	$smarty->assign('resultC', $resultC);
	$course->setCourseId($_GET['id']);
	$smarty->assign('post', $course->Info());
	$smarty->assign('mnuMain','cursos');
	$periods = $period->Enumerate();
    $smarty->assign("periods", $periods);
?>