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

		case "foro":
			$tipo = "foro";
			$titulo = "Foro";
			break;

		case "respuestas":
			$tipo = "respuestas";
			$titulo = "Respuestas del Tópico";
			break;

		default:
			$tipo = "resultado";
			$titulo = "Evalución Diagnóstica";
	}

	if($myUnicoModulo == null)
		exit;

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

			// Examen Final
			$group_final_test->setCourseId($courseId);
			$final_test = $group_final_test->Enumerate();
			$smarty->assign('final_test', $final_test);
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

		if($tipo == "foro")
		{
			$group_forum->setCourseId($myModule["courseId"]);
			$group_forum->setUserId($User["userId"]);
			$personalId = $group_forum->getCapacitador();
			$forum = $group_forum->Enumeratesub($personalId);
			$smarty->assign('positionId', $User["positionId"]);
			$smarty->assign('forum', $forum);
			if($User["positionId"] == 0)
				$smarty->assign('mnuMain', "modulo");
			$smarty->assign('mnuSubmain', 'foro');
			$smarty->assign('module', 'view-modules-student');
		}
		
		if($tipo == "respuestas")
		{
			if($_POST)
			{ 
				if(isset($_POST['reply']))
				{
					$group_forum->setTopicsubId($_POST["topicsubId"]);
					$group_forum->setModuleId($_POST["courseId"]);
					$group_forum->setReply($_POST["reply"]);
					if($_SESSION["User"]["positionId"] == 0 || $_SESSION["User"]["positionId"] == "" || $_SESSION["User"]["positionId"] == null || !isset($_SESSION["User"]["positionId"]))
					{
						$group_forum->setUserId($_SESSION["User"]["userId"]);
						$group_forum->setPersonalId(0);
					}
					else
					{
						$group_forum->setUserId(0);
						$group_forum->setPersonalId($_SESSION["User"]["userId"]);
					}
					$group_forum->AddReply();
				}
				else
				{
					$group_forum->setModuleId($_POST["moduleId"]);
					$group_forum->setReplyId($_POST['replyId']);
					$group_forum->DeleteReply();
				}
			}
			$group_forum->setTopicsubId($_GET["topic"]);
			$topic = $group_forum->TopicsubInfo();
			$smarty->assign('topic', $topic);
			
			$smarty->assign('topicsubId', $_GET["topic"]);
			$smarty->assign('positionId', $_SESSION["User"]["positionId"]);
			$smarty->assign('courseId', $topic['courseId']);
			
			$replies = $group_forum->Replies();
			$smarty->assign('replies', $replies);
			$smarty->assign('id', $_GET["topic"]);
			if($User["positionId"] != 1 && $User["positionId"] != 4)
				$smarty->assign('mnuMain', "modulo");
			$smarty->assign('module', 'view-modules-student');
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