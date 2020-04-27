<?php
		
/* For Session Control - Don't remove this */
//	$user->allow_access(8);	
	
	$myUnicoModulo = $module->moduloDeCurso($_GET["id"]);
	$infoUSubject = $module->infoUserSubject($_GET["id"],$_SESSION['User']['userId']);

	$tipo  = "";
	$titulo = "";
	switch($_GET["tipo"])
	{
		case "actividades":
			$tipo = "actividades";
			$titulo = "Actividades";
			break;

		case "recursos":
			$tipo = "recursos";
			$titulo = "Recursos de Apoyo";
			break;

		case "avisos":
			$tipo = "avisos";
			$titulo = "Avisos";
			break;

		default:
			$tipo = "resultado";
			$titulo = "Evalución Diagnóstica";
	}
	
	if($myUnicoModulo == null){
		exit;
	}

	$module->setCourseModuleId($myUnicoModulo["courseModuleId"]);
	$myModule = $module->InfoCourseModule();
	$courseId = $myModule["courseId"];

	if($infoUSubject["acuseDerecho"]=="si"){

		if($myModule["evalOk"]=="si"){
			$verResultado = true;
			$resEstadoisticas = $test->estadisticas($myModule["infoActivity"]["activityId"],$_SESSION['User']['userId']);
		}

		if($tipo == "actividades")
		{

		}

		if($tipo == "recursos")
		{

		}

		if($tipo == "avisos")
		{
			$announcements = $group_announcement->Enumerate($courseId);
			$smarty->assign('announcements', $announcements);
		}

		$test->setActivityId($myModule["infoActivity"]["activityId"]);
		$myTest = $test->Enumerate($verResultado,$_SESSION['User']['userId']);
	}
	
	$smarty->assign('tipo', $tipo);
	$smarty->assign('titulo', $titulo);
	$smarty->assign('resEstadoisticas', $resEstadoisticas);
	$smarty->assign('infoUSubject', $infoUSubject);
	$smarty->assign('myModule', $myModule);
	$smarty->assign('id', $_GET["id"]);
	$smarty->assign('myTest',$myTest);
	$smarty->assign('userId',$_SESSION['User']['userId']);
	$smarty->assign('UserType',$_SESSION['User']['type']);
	$smarty->assign('activityId',$myModule["infoActivity"]["activityId"]);
	$smarty->assign('mnuSubmain','anuncios');

?>