<?php
	$user->allow_access(37);	
	
    $course_inform->setCourseId($_GET['id']);
	$informs = $course_inform->Enumerate();
    $smarty->assign("informs", $informs);
?>