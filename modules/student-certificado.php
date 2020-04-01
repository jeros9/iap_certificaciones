<?php
	
	$userId = $_GET['userId'];
    $subjectId = $_GET['subjectId'];
    
    $student->setUserId($userId);
    $student->setSubjectId($subjectId);
    $data_user  = $student->GetInfo();
    $subject->setSubjectId($subjectId);
    $data_subject = $subject->Info();
    $ruta = $student->getDocumento(5);

	$smarty->assign('subject', $data_subject);
	$smarty->assign('ruta', $ruta);
	$smarty->assign('hasSurvey', $student->hasSurvey());
	$smarty->assign('user', $data_user);
?>