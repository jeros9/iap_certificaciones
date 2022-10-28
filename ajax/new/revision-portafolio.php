<?php
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');
session_start();
$list = $course->getBriefcase($_POST["certificaciones"], $_POST['evaluator'], $_POST["grupos"]);
$smarty->assign("list", $list);
$smarty->assign("evaluator", $_POST['evaluator']);
$smarty->assign("certification", $_POST["certificaciones"]);
$smarty->assign("group", $_POST["grupos"]);
echo json_encode(array(
    "selector"  =>"#contenido",
    "html"      =>$smarty->fetch(DOC_ROOT.'/templates/lists/new/revision-portafolio.tpl')
));
?>