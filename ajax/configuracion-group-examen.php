<?php
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

switch($_POST["type"])
	{
		case 'EditTest':
			$group_activity->setPregunta($_POST["question"]);
			$group_activity->setOpcionA($_POST["opcionA"]);
			$group_activity->setOpcionB($_POST["opcionB"]);
			$group_activity->setOpcionC($_POST["opcionC"]);
			$group_activity->setOpcionD($_POST["opcionD"]);
			$group_activity->setOpcionE($_POST["opcionE"]);
			$group_activity->setRespuesta($_POST["answer"]);
			$group_activity->setTestId($_POST["Id"]);
			
            if($group_activity->EditTest())
            {
				echo "ok[#]";
				$group_test->setActivityId($_POST["activityId"]);
				$tests = $group_test->Enumerate();
				$smarty->assign('tests', $tests);
				$smarty->display(DOC_ROOT . '/templates/lists/group-questions.tpl');
            }
            else
            {
				echo "fail[#]";
				$smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
			}
		    break;
	}
?>