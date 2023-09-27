<?php
$certificationsList = $course->enumerateCer();
$evaluatorsList = $personal->getEvaluators();
$smarty->assign('certificationsList', $certificationsList);
$smarty->assign('evaluatorsList', $evaluatorsList); 
?>