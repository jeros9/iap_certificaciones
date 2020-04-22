<?php
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

switch($_POST["type"])
{
    case 'deleteResource':
        $group_resource->setResourceId($_POST['resourceId']);
        $info = $group_resource->Info();
        $group_resource->Delete();
        echo "ok[#]";
        $smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
        echo "[#]";
        $group_resource->setCourseId($info['courseId']);
        $resources = $group_resource->Enumerate();
        $smarty->assign('resources', $resources);
        $smarty->assign("DOC_ROOT", DOC_ROOT);
        $smarty->display(DOC_ROOT . '/templates/lists/new/group_resources.tpl');
        break;
}
?>