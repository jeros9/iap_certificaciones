<?php 

$prospect = $_GET['id'];
$user->setUserId($prospect);
$dataProspect = $user->getProspect("prospects.id = {$prospect}"); 
$smarty->assign("prospect", $dataProspect);