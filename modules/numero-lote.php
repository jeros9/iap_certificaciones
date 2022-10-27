<?php
    $lot = $course->getLotNumber($_GET['subjectId'],$_GET['courseId'],$_GET['id']);
    $smarty->assign('id',$_GET['id']);
    $smarty->assign('courseId',$_GET['courseId']);
    $smarty->assign('subjectId',$_GET['subjectId']);

    $smarty->assign("lot",$lot['lot']);
?>