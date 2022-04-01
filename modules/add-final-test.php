<?php	
	/* For Session Control - Don't remove this */
	$user->allow_access(37);

	$course->setCourseId($_GET['id']);
    $infoCourse = $course->Info();
    $name = explode(' ', $infoCourse['name']);
    $subject = $name[0];

    $template = $group_final_test->checkTemplate($infoCourse['subjectId']);
    $hasTemplate = $template > 0 ? true : false;
    $smarty->assign('hasTemplate', $hasTemplate);
    $group_final_test->setActivityId($template);
    $test = $group_final_test->Info();
    $smarty->assign('testId', $template);
    $smarty->assign('courseId', $_GET['id']);
    $smarty->assign('subject', $subject);
    $smarty->assign('test', $test);
?>