<?php
	/* For Session Control - Don't remove this */
	$user->allow_access(37);

    $group_final_test->setActivityId($_GET['id']);
    $infoTest = $group_final_test->Info();
    /* echo "<pre>";
    print_r($infoTest);
    exit; */

    $smarty->assign('test', $infoTest);

    /* echo "<pre>";
    print_r($subject);
    exit; */
?>