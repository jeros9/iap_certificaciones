<?php 

$prospect = $_GET['id'];
$user->setUserId($prospect);
$dataProspect = $user->getProspect(); 
$smarty->assign("prospect", $dataProspect);