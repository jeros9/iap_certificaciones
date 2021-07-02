<?php
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

switch($_POST["type"])
{
    case 'deleteInform':
        $course_inform->setInformId($_POST['informId']);
        $info = $course_inform->Info();
        $url = WEB_ROOT . '/edit-modules-group/id/' . $info['courseId'];
        $course_inform->Delete();
        echo "ok[#]";
        $smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
        echo "[#]" . $url;
        break;
}
?>