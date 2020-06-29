<?php
	$module->setCourseModuleId($_GET["id"]);
	$myModule = $module->InfoCourseModule();
	$smarty->assign('myModule', $myModule);
	
	$group_forum->setCourseId($myModule["courseId"]);
    $smarty->assign('id', $myModule["courseId"]);
    $forum = $group_forum->Enumeratesub();
    
    $smarty->assign('positionId', $User["positionId"]);
	$smarty->assign('forum', $forum);
	$smarty->assign('asunto', '');
	$smarty->assign('titulo', 'Foro');
    if($User["positionId"] == 0)
        $smarty->assign('mnuMain', "modulo");
    $smarty->assign('mnuSubmain', 'foro');
    $smarty->assign('module', 'foro');
?>