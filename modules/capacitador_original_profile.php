<?php
$x = 0;
if ($_GET['id']!=NULL)
{
    $announcement->setAnnouncementId($_GET['id']);
    $announcement->Delete();
}
	
$smarty->assign("x", $x);	
$user->allow_access();	
$student->setUserId($_SESSION["User"]["userId"]);
$info = $student->GetInfo();
$smarty->assign("id",$_SESSION["User"]["userId"]);	
if($_SESSION['User']['type'] == 'student')
{
    $student->setUserId($_SESSION['User']['userId']);
    $data_student = $student->GetInfo();
    $smarty->assign("firma", $data_student['firma']);
}
$smarty->assign("positionId", $_SESSION['positionId']);	
$curricula = $course->EnumerateActive();
$smarty->assign("curricula", $curricula);	
$activeCourses = $student->StudentCourses();
$smarty->assign("courses", $activeCourses);	
$smarty->assign("activeCourses", $activeCourses);	
$inactiveCourses = $student->StudentCourses("inactivo", "si");
$smarty->assign("inactiveCourses", $inactiveCourses);	
$finishedCourses = $student->StudentCourses("finalizado");
$student->setCountry(1);
$lstEstados = $student->EnumerateEstados();
$smarty->assign("lstEstados", $lstEstados);	
$smarty->assign("finishedCourses", $finishedCourses);		
$announcements = $announcement->Enumerate(0, 0);
$smarty->assign('announcements', $announcements);
$lstSolicitante = $student->EnumerateSolicitantes();	
$lstSector = $student->EnumerateSector();	
$smarty->assign('info', $info);
$smarty->assign('lstSector', $lstSector);
$smarty->assign('lstSolicitante', $lstSolicitante);
$lst = $student->enumerateMunicipio(7);
$smarty->assign("lst", $lst);	
$notificaciones = $notificacion->Enumerate();
$smarty->assign('notificaciones', $notificaciones);
$smarty->assign('msjC', $_SESSION['msjC']);
$smarty->assign('msjCc', $_SESSION['msjCc']);
unset($_SESSION['msjC']);
unset($_SESSION['msjCc']);

if($_SESSION["User"]["type"] == "Docente")
    $resu = $student->certificacionesCapacitadorOriginal($_SESSION["User"]["userId"]);

$smarty->assign('resu', $resu);
?>