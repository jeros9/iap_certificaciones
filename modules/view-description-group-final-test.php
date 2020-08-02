<?php
	$date = date("d-m-Y");
	$smarty->assign('date', $date);

	$group_final_test->setActivityId($_GET["id"]);
	$final_test = $group_final_test->Info();
	$smarty->assign('final_test', $final_test);
?>