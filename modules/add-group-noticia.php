<?php
	if($_SESSION["User"]["type"] == "student")
        exit;

	if($_POST)
	{
        if($_POST['announcementId'] <> null)
        {
			$group_announcement->setCourseId($_POST["courseId2"]);
			$group_announcement->setTitle($_POST["title"]);
			$group_announcement->setDescription($_POST["description"]);
			$group_announcement->Edit($_POST['announcementId']);
			header("Location:" . WEB_ROOT . "/edit-modules-group/id/" . $_POST["courseId2"]."");
			exit;
        }
		$group_announcement->setCourseId($_POST["courseId"]);
		$group_announcement->setTitle($_POST["title"]);
		$group_announcement->setDescription($_POST["description"]);
		$group_announcement->Save();
        if($_POST["auxTpl"] == "admin")
        {
			header("Location:" . WEB_ROOT. "/edit-modules-group/id/" . $_POST["courseId"]);
			exit;
		}
    }
    
	if($_GET['cId'])
	{
		$infos = $group_announcement->Info($_GET['cId']);
		$smarty->assign('infos', $infos);
	}
	$smarty->assign('id', $_GET["id"]);
	$date = date("d-m-Y");
?>