<?php
	$user->allow_access(37);	
	
    $course_attendance->setAttendanceDay($_GET['fecha']);
    $theGroup = $course_attendance->AttendanceMunicipality($_GET['id']);
    $smarty->assign("group", $theGroup);
?>