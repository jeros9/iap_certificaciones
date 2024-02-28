<?php 
$usuario['userId'] = $_GET['userId'];
$where = "AND user_subject.alumnoId = ".$_GET['alumnoId'];
$students = $course->getRedDates($usuario, $where);
 
$smarty->assign("course", $_GET['id']);
$smarty->assign("subject", $_GET['subjectId']);
$smarty->assign("students", $students);