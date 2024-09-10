<?php
$curricula = $course->EnumerateActive("course.courseId IN(395, 391, 393, 390, 394, 388, 392, 396)"); 
$dataProspect = $user->getProspect("prospects.id = {$_GET['id']}");
$smarty->assign("curricula", $curricula);
$smarty->assign("id", $_GET["id"]);
$smarty->assign("prospect", $dataProspect[0]);
