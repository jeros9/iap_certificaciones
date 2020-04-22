<?php
	if($_SESSION["User"]["type"] == "student")
        exit;

	if($_POST)
	{
		$test->setTestId($_GET["id"]);
		$test->setQuestion($_POST["question"]);
		$test->setOpcionA($_POST["opcionA"]);
		$test->setOpcionB($_POST["opcionB"]);
		$test->setOpcionC($_POST["opcionC"]);
		$test->setOpcionD($_POST["opcionD"]);
		$test->setOpcionE($_POST["opcionE"]);
		$test->setAnswer($_POST["answer"]);
		$test->Edit();
	}
	$group_test->setTestId($_GET["id"]);
	$question = $group_test->Info();
	$smarty->assign('question', $question);
?>