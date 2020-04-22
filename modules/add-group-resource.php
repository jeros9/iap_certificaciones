<?php
	if($_SESSION["User"]["type"] == "student")
        exit;

	if($_POST)
	{
		$group_resource->setCourseId($_GET["id"]);
		$group_resource->setResourceName($_POST["name"]);
		$group_resource->setDescription($_POST["description"]);
		$group_resource->Save();
        if($_POST["auxTpl"] == "admin")
        {
			header("Location:" . WEB_ROOT . "/edit-modules-group/id/" . $_POST["cId"]);
			exit;
		}
    }
    
    $smarty->assign('id', $_GET["id"]);
	$date = date("d-m-Y");
	$smarty->assign('date', $date);
?>