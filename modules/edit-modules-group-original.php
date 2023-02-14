<?php
    if($_SESSION["User"]["type"] == "student")
		exit;
		
	$course->setCourseId($_GET['id']);
    $infoCourse = $course->Info();
    $smarty->assign('infoCourse', $infoCourse);

	$date = date("d-m-Y");
	$smarty->assign('date', $date);
	$smarty->assign('userId', $_SESSION["User"]["userId"]);

	$module->setCourseModuleId($_GET["id"]);
	$smarty->assign('mnuMain', "cursos");
?>