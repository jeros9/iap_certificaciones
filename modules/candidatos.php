<?php
if($_SESSION["User"]["type"] == "student")
    exit;

$group_activity->setCourseId($_GET["id"]);
$actividades = $group_activity->Enumerate();
$smarty->assign('actividades', $actividades);

$totalActividades = 0;
foreach($actividades as $value)
    if($value["score"] > 0)
        $totalActividades++;
        

$smarty->assign('totalActividades', $totalActividades);

$totalPonderation = $group_activity->TotalPonderation();
$smarty->assign('totalPonderation', $totalPonderation);

/* $course->setCourseId($_GET['id']);
$info = $course->Info(); */

$group->setCourseId($_GET['id']);
$theGroup = $group->DefaultGroupCapacitador();

$smarty->assign('theGroup', $theGroup);

?>