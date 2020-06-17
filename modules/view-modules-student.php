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

		case "live":
			$tipo = "live";
			$titulo = "Transmisiones en Vivo";
			break;

		case "videos":
			$tipo = "videos";
			$titulo = "Galería de Videos";
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
			$date = date("d-m-Y");
			$smarty->assign('date', $date);
			$group_activity->setCourseId($courseId);
			$actividades = $group_activity->Enumerate();
			$smarty->assign('actividades', $actividades);

			$totalScore = 0;
			foreach($actividades as $res)
				$totalScore += $res["realScore"];
			
			$examenes = $group_activity->Enumerate("Examen");
			
			/* foreach($examenes as $res)
				$totalScore += $res["realScore"]; */
			
			if($_SESSION["exito"] == "si")
			{
				$smarty->assign('exito', "si");
				$smarty->assign('tareaId', $_SESSION["tareaId"]);
				unset($_SESSION["exito"]);
				unset($_SESSION["tareaId"]);
			}
			
			$smarty->assign('totalScore', $totalScore);
		}

		if($tipo == "recursos")
		{
			$group_resource->setCourseId($courseId);
			$resources = $group_resource->Enumerate();
			$smarty->assign('resources', $resources);
		}

		if($tipo == "avisos")
		{
			$announcements = $group_announcement->Enumerate($courseId);
			$smarty->assign('announcements', $announcements);
		}

		//if($tipo == "videos")
		//{
			$videos = $module->lives();
			$hasVideos = false;
			if(count($videos) > 0)
				$hasVideos = true;
			$smarty->assign('videos', $videos);
			$smarty->assign('hasVideos', $hasVideos);
		//}

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