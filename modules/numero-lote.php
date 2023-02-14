<?php
    if(isset($_GET['tipo']) && $_GET['tipo'] == "general"){
        $lot = $course->getLotNumberCourse($_GET['subjectId'],$_GET['id']); 
        $smarty->assign("courseId", $_GET['id']);
        $smarty->assign('subjectId',$_GET['subjectId']);
        $smarty->assign("lot",$lot);
        $smarty->assign("tipo", "general");
    }else{
        $lot = $course->getLotNumber($_GET['subjectId'],$_GET['courseId'],$_GET['id']);
        $smarty->assign('id',$_GET['id']);
        $smarty->assign('courseId',$_GET['courseId']);
        $smarty->assign('subjectId',$_GET['subjectId']);
        $smarty->assign("lot",$lot);
    }
?>