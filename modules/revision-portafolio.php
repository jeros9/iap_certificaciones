<?php
$certificationsList = $course->enumerateCer();
$evaluatorsList = $personal->getEvaluators();
$smarty->assign('certificationsList', $certificationsList);
$smarty->assign('evaluatorsList', $evaluatorsList);
if ($_GET['option'] && $_GET['option'] == "evaluator") {  
    $list = $course->getBriefcase($_GET['subjectId'],$User['userId'],$_GET['id']);
    //print_r($list);
    $smarty->assign("list", $list);
    $smarty->assign("option","evaluator");
    $smarty->assign("evaluator",$User['userId']);
    $smarty->assign("certification",$_GET['subjectId']);
    $smarty->assign("group",$_GET['id']);
}
?>