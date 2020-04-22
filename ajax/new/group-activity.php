<?php

include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();

switch($_POST["type"])
{
      case 'deleteActivity':
            $group_activity->setActivityId($_POST['activityId']);
            $info = $group_activity->Info();

            $group_activity->Delete();
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";

            $group_activity->setCourseId($info['courseId']);
            $actividades = $group_activity->Enumerate();
            $smarty->assign('actividades', $actividades);

            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT.'/templates/lists/new/group-activities.tpl');
            break;
}
?>