<?php
	if($_SESSION["User"]["type"] == "student")
        exit;

	if($_POST)
	{
        $date = date("Y-m-d");
		$course_inform->setCourseId($_POST["cId"]);
		$course_inform->setPersonalId($_SESSION["User"]["userId"]);
		$course_inform->setCreatedAt($date);
		$course_inform->Save();
        if($_POST["auxTpl"] == "admin")
        {
			header("Location:" . WEB_ROOT . "/edit-modules-group/id/" . $_POST["cId"]);
			exit;
		}
    }
    
    $smarty->assign('cId', $_GET["cId"]);
?>