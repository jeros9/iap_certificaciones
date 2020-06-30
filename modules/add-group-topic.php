<?php
    $group_forum->setCourseId($_GET["id"]);
	if($_POST)
	{
		$group_forum->setCourseId($_POST["courseId"]);
        $group_forum->setUserId($_POST["userId"]);
		
		$group_forum->setSubject($_POST["subject"]);
		$group_forum->setReply($_POST["reply"]);
		$personalId = 0;
		if($_SESSION['User']['perfil'] == 'Docente')
			$personalId = $_SESSION['User']['userId'];
		else
			$personalId = $group_forum->getCapacitador();

		$group_forum->AddTopic($personalId);
	
		if($_GET['modulo'] == 'foro')
			header("Location:" . WEB_ROOT . "/foro/id/" . $_GET["id"]);
		else
			header("Location:" . WEB_ROOT . "/view-modules-student/id/" . $_GET["id"] . "&tipo=foro");
		exit;
	}
	
	
	$smarty->assign('courseId', $_GET["id"]);
    $smarty->assign('userId', $_SESSION["User"]["userId"]);
    $smarty->assign('module', $_GET['modulo']);