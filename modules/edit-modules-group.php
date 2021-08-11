<?php
    if($_SESSION["User"]["type"]=="student")
		exit;

	if($_POST)
	{
		$module->setCourseModuleId($_GET["id"]);
		$module->setInitialDate($_POST["initialDate"]);
		$module->setFinalDate($_POST["finalDate"]);
		$module->setDaysToFinish($_POST["daysToFinish"]);
		$module->setPersonalId($_POST["personalId"]);
		$module->setTeacherId($_POST["teacherId"]);
		$module->setTutorId($_POST["tutorId"]);
		$module->setExtraId($_POST["extraId"]);
		$module->setActive($_POST["active"]);
		$module->EditModuleToCourse();
	}
    if($_GET['e'])
    {
        $calendario=DOC_ROOT."/calendario/calendario_".$_GET['id'].".jpg";
        $calendario1=DOC_ROOT."/calendario/calendario_".$_GET['id'].".JPG";
        if($_GET['e']==1){
            if(file_exists($calendario)){
            @unlink($calendario);
        }else if(file_exists($calendario1)){
            @unlink($calendario1);}
        }
        $swf=DOC_ROOT."/flash/flash_".$_GET["id"].".swf";
        if($_GET['e']==2)
        @unlink($swf);
    }

	$course->setCourseId($_GET['id']);
    $infoCourse = $course->Info();
    $smarty->assign('infoCourse', $infoCourse);

    /* $swf=DOC_ROOT."/flash/flash_".$_GET["id"].".swf";
    $nombrePre="flash_".$_GET["id"].".swf";
    if (file_exists($swf)) {
    $smarty->assign('moduleCourseId',$_GET['id']);
    $smarty->assign('existepre',1);
    $smarty->assign('nombrePre', $nombrePre);
    } else {
    $smarty->assign('existepre',0);
    } */

    /* $calendario=DOC_ROOT."/calendario/calendario_".$_GET["id"].".jpg";
    $calendario1=DOC_ROOT."/calendario/calendario_".$_GET["id"].".JPG";
    $nombreCal="calendario_".$_GET["id"].".jpg";
    $nombreCal1="calendario_".$_GET["id"].".JPG";
    if (file_exists($calendario)) {
    $smarty->assign('moduleCourseId',$_GET['id']);
    $smarty->assign('existecal',1);
    $smarty->assign('nombreCal', $nombreCal);
    }else if(file_exists($calendario1)){
    $smarty->assign('moduleCourseId',$_GET['id']);
    $smarty->assign('existecal',1);
    $smarty->assign('nombreCal', $nombreCal1);

    } else {
    $smarty->assign('existecal',0);
    } */

	//verificando foro!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	/* $forum->setCourseModuleId($myModule["courseModuleId"]);
	$forum->setCourseId($myModule["courseId"]);
	$forum = $forum->Enumerate();
$course->setCourseId($myModule["courseId"]);
$smarty->assign('courseId', $myModule["courseId"]);
$cursos = $course->infoCoursem();
	$smarty->assign('cursos', $cursos);

	$smarty->assign('forum', $forum);

	$smarty->assign('id', $_GET["id"]);

	$smarty->assign('typeUser',$User["positionId"]); */

//*************************************************************************************************************

	/* $smarty->assign('algo', 1);
	$empleados = $personal->Enumerate();
	$smarty->assign('empleados', $empleados); */

	$date = date("d-m-Y");
	$smarty->assign('date', $date);

	/* $smarty->assign('invoiceId', $_GET["id"]); */
	//$smarty->assign('myModule', $myModule);

	//actividades
	$group_activity->setCourseId($_GET["id"]);
    $actividades = $group_activity->Enumerate();
	$smarty->assign('actividades', $actividades);

	$totalActividades = 0;
	foreach($actividades as $value)
	{
		if($value["score"] > 0)
			$totalActividades++;
	}

	// echo $totalActividades;
	// exit;
	$smarty->assign('totalActividades', $totalActividades);


	$totalPonderation = $group_activity->TotalPonderation();
	$smarty->assign('totalPonderation', $totalPonderation);

	//$majorModality = $activity->GetMajorModality();

	// echo ""; print_r($majorModality);
	// exit;
	//$smarty->assign('majorModality', $majorModality);

	// Recursos
	$group_resource->setCourseId($_GET["id"]);
	$resources = $group_resource->Enumerate();
	$smarty->assign('resources', $resources);

	$module->setCourseModuleId($_GET["id"]);
	$videos = $module->lives();
	//$info = $module->InfoCourseModule();
	$smarty->assign('videos', $videos);
	$smarty->assign('mnuMain', "cursos");

	$announcements = $group_announcement->Enumerate($infoCourse["courseId"]);
	$smarty->assign('usuariologId', $_SESSION['User']['userId']);
	$smarty->assign('announcements', $announcements);

	$course_inform->setPersonalId($_SESSION['User']['userId']);
	$course_inform->setCourseId($infoCourse['courseId']);
	$informe = $course_inform->Inform();
	$smarty->assign('informe', $informe);
?>