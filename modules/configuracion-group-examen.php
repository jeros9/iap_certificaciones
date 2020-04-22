<?php
	if($_SESSION["User"]["type"]=="student")
        exit;

	if($_POST)
	{
		$group_activity->setActivityId($_GET["id"]);
		$group_activity->setTimeLimit($_POST["timeLimit"]);
		$group_activity->setNoQuestions($_POST["noQuestions"]);
		$group_activity->EditExamen();
	}

	$group_activity->setActivityId($_GET["id"]);
	$group_activity = $group_activity->Info();
	$smarty->assign('activity', $group_activity);
	
	$group_test->setActivityId($_GET["id"]);
	$tests = $group_test->Enumerate();
	$smarty->assign('tests', $tests);
	$smarty->assign('ponderationPerQuestion', $group_test->PonderationPerQuestion());
	$smarty->assign('activityId', $_GET["id"]);
	$smarty->assign('mnuMain', "cursos");
?>