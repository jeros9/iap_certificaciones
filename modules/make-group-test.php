<?php
    if(!isset($_SESSION["User"]["userId"]) or $_SESSION["User"]["userId"] == null or $_SESSION["User"]["userId"] == "")
    {
		header('Location: ' . WEB_ROOT);
		exit;
	}

	if($_POST)
	{
		$group_test->setUserId($_SESSION["User"]["userId"]);
		$group_test->setActivityId($_GET["id"]);
		$group_test->SendTest($_POST["anwer"]);
	}

	$group_activity->setActivityId($_GET["id"]);
	$actividad = $group_activity->Info();
	$smarty->assign('actividad', $actividad);

	$group_test->setActivityId($_GET["id"]);
	$myTest = $group_test->Enumerate();
	
	$group_test->setUserId($_SESSION["User"]["userId"]);
	$access  = $group_test->Access($actividad["tries"]);
	$smarty->assign('access', $access);
	
	if(!$access)
	{
		$score  = $group_test->TestScore();
		$smarty->assign('score', $score);
	}
	
	//$myTest = $group_test->Randomize($myTest, $actividad["noQuestions"]);
	$smarty->assign('myTest', $myTest);
    
    $hora_actual = time();
	if(!$_SESSION["timeLimit"])
		$_SESSION["timeLimit"] = $hora_actual + ($actividad["timeLimit"] * 60);
	
	$rest = $_SESSION["timeLimit"] - $hora_actual;
	$smarty->assign('timeLeft', $rest);
?>