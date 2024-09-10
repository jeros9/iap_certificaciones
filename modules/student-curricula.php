<?php
$curricula = $course->EnumerateActive(); 
$dataProspect = $user->getProspect("prospects.id = {$_GET['id']}");
$smarty->assign("curricula", $curricula);
$smarty->assign("id", $_GET["id"]);
$smarty->assign("prospect", $dataProspect[0]);
