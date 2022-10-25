<?php 
$students = $course->getRedDates($User);
$smarty->assign("course", $_GET['id']);
$smarty->assign("subject", $_GET['subjectId']);
$smarty->assign("students", $students);
?>