<?php
    if(!isset($_SESSION["User"]["userId"]) or $_SESSION["User"]["userId"] == null or $_SESSION["User"]["userId"] == "")
    {
		header('Location: ' . WEB_ROOT);
		exit;
	}

	if($_POST)
	{
		/* echo "<pre>";
		var_dump($_POST["anwer"]); */
		//exit;
		$group_questions_final_test->setUserId($_SESSION["User"]["userId"]);
		$group_questions_final_test->setActivityId($_GET["id"]);
		$group_questions_final_test->SendTest($_POST["anwer"]);
	}

	$group_final_test->setActivityId($_GET["id"]);
	$final_test = $group_final_test->Info();
    $smarty->assign('final_test', $final_test);

	$group_questions_final_test->setActivityId($_GET["id"]);
	$myTest = $group_questions_final_test->Enumerate();
	
	$group_questions_final_test->setUserId($_SESSION["User"]["userId"]);
	$access  = $group_questions_final_test->Access($final_test["tries"]);
	$smarty->assign('access', $access);
	
	$group_questions_final_test->setActivityId($_GET["id"]);
	$group_questions_final_test->setUserId($_SESSION["User"]["userId"]);
	if(!$access)
	{
		$score  = $group_questions_final_test->TestScore();
		$smarty->assign('score', $score);
    }
    else
    {
        $group_questions_final_test->initFinalTest();
    }
	
	//$myTest = $group_test->Randomize($myTest, $final_test["noQuestions"]);
	$smarty->assign('myTest', $myTest);
    
	$myTestInfo = $group_questions_final_test->MyTestInfo();
	if($myTestInfo != null)
		$hora_actual = strtotime($myTestInfo['initialDate'] . ' ' . $myTestInfo['initialHour']);
	else
    	$hora_actual = time();
	/* echo "<pre>";
	var_dump($hora_actual);
	exit; */
	//if(!$_SESSION["timeLimit"])
	$_SESSION["timeLimit"] = $hora_actual + ($final_test["timeLimit"] * 60);
	
	$rest = $_SESSION["timeLimit"] - time();
	/* echo "<pre>";
	print_r($rest);
	exit; */
    $smarty->assign('timeLeft', $rest);
	$mins = $rest / 60;
	if($myTestInfo['finalDate'] == null)
		$is_alive = $mins > 1 ? 1 : 0;
	else
		$is_alive = 0;
	$smarty->assign('is_alive', $is_alive);
?>