<?php
	if($_SESSION["User"]["type"] == "student")
        exit;

	if($_POST)
	{
		$group_resource->setResourceId($_GET["id"]);
		$group_resource->setResourceName($_POST["name"]);
		$group_resource->setDescription($_POST["description"]);
		$group_resource->Edit();
		
        if($_POST["auxTpl"] == "admin")
        {
			header("Location:" . WEB_ROOT . "/edit-modules-group/id/" . $_POST["cId"]);
			exit;
		}
	}

    $smarty->assign('id', $_GET["id"]);
	$group_resource->setResourceId($_GET["id"]);
	$group_resource = $group_resource->Info();
	$smarty->assign('resource', $group_resource);
	
?>