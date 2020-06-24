<?php
	if($_SESSION["User"]["type"] == "student")
        exit;	
        
	if($_POST)
	{
  	    $activity->setActivityId($_GET["id"]);
		$actividad = $activity->Info();
		$group->setCourseModuleId($actividad["courseModuleId"]);
		$group->EditScore($_POST["modality"], $_GET["id"], $_POST["ponderation"], $_POST["retro"]);
		
		if($_POST["auxTpl"] == "admin"){
			
			
			
			header("Location:".WEB_ROOT."/edit-modules-course/id/". $_POST["cId"]."");
			exit;
		}
	}

	$group_activity->setActivityId($_GET["id"]);
	$actividad = $group_activity->Info();
	$smarty->assign('actividad', $actividad);
	$smarty->assign('id', $_GET["id"]);

	$course->setCourseId($actividad["courseId"]);
    $info = $course->Info();
    
	$group->setCourseId($actividad["courseId"]);
	$theGroup = $group->ScoreGroupCapacitador($actividad["modality"], $actividad["activityType"], $_GET["id"], $_SESSION["User"]["userId"]);
	$smarty->assign('theGroup', $theGroup);
	$smarty->assign('cId', $_GET["cId"]);


?>