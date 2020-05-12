<?php
	if($_POST)
	{
		$group_homework->setActivityId($_GET["id"]);
		$group_homework->setModality($_POST["modality"]);
		$group_homework->setNombre($_POST["nombre"]);
		$group_homework->setUserId($_SESSION["User"]["userId"]);
		$group_homework->Upload($_FILES["path"]);

		$_SESSION["exito"] = "si";
		$_SESSION["tareaId"] = $_GET["id"];
		header("Location:" . WEB_ROOT . "/view-modules-student/id/" . $_POST["courseId"] . "&tipo=actividades");
		exit;
	}

	$group_activity->setActivityId($_GET["id"]);
	$actividad = $group_activity->Info();
    $smarty->assign('actividad', $actividad);

	$group_homework->setActivityId($_GET["id"]);
	$group_homework->setUserId($_SESSION["User"]["userId"]);
	$homework = $group_homework->Uploaded();
	$smarty->assign('homework', $homework);
	
?>