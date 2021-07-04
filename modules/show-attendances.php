<?php
	$user->allow_access(37);	
	
    $course_attendance->setCourseId($_GET['id']);
	$attendances = $course_attendance->EnumerateCapacitador();
    $smarty->assign("attendances", $attendances);
?>