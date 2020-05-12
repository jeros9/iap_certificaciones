<?php
	$date = date("d-m-Y");
	$smarty->assign('date', $date);

	$group_activity->setActivityId($_GET["id"]);
	$actividad = $group_activity->Info();
	$smarty->assign('actividad', $actividad);
?>