<?php

include_once('init.php');
include_once('config.php');
include_once(DOC_ROOT.'/libraries.php');

//print_r($_GET);exit;
if (!isset($_SESSION)) 
{
  session_start();
}


//print_r($_SESSION);
//		unset($_SESSION['lastClick']);
//last click
//print_r($_SESSION);
/* if(time() > $_SESSION["lastClick"] + 90000 && $_GET["page"] != "login"  && $_GET["page"] != "register" && $_GET["page"] != "recuperacion"  && $_GET["page"] != "tv"  && $_GET["page"] != "make-test" && $_GET["page"] != "registro")
{
	unset($_SESSION['User']);
	unset($_SESSION['lastClick']);
	header("Location: ".WEB_ROOT."/login");
} */

if($_SESSION["User"])
{
	$_SESSION["lastClick"] = time();
}

$User = $_SESSION['User'];





$pages = array(	
	'login',
	'logout',
	'personal1',
	'homepage',
	'student',
	'major',
	'speciality',
	'position',
	'personal',
	'schedule',
	'group',
	'group-subject',
	'semester',
	'subject',
	'assign',
	'institution',
	'role',
	'periodo',
	'subject-group',
	'typetest',
	'gradereport',
	'gradereport-user',
	'gradescore-user',
	'schedule-time',
	'schedule-personal',
	'schedule-subject',
	'schedule-student',
	'schedule-students',	
	'schedule_test',
	'schedule-groups',
	'schedule-group',	
	'classroom',
	'cancel-code',
	'report-excel',
	'report-redi',
	'report-cancel',
	'report-regular',
	'report-desercion',
	'report-calificacion',
	'school-type',
	'group-user',
	'ficha',
	'study-constancy',
	'kardex-calificacion',
	'register',
	'registro',
    'recuperacion',
	'docente',

	//new
	"new-subject",
	"edit-subject",
	"open-subject",
	"history-subject",
	"new-module",
	"edit-module",
	"edit-course",
	"activities-course",
	
	//alumn
	"curricula",
	"alumn-services",
	"payments",
	"invoices",
	"invoices-student",
	"new-payment",
	"view-payments",
	"view-modules-course",
	"add-modules-course",
	"edit-modules-course",
	"add-activity",
	"edit-activity",
	"view-description-activity",
	"configuracion-examen",
	"edit-question",
	"view-modules-course-student",
	"view-modules-student",
	"presentation-modules-student",
	"information-modules-student",
	"calendar-modules-student",
	"examen-modules-student",
	"calendar-image-modules-student",
	"resources-modules-student",
	"forum-modules-student",
	"forumsub-modules-student",
	"add-topic",
	"add-reply",	
	"team-modules-student",
	"add-resource",
	"edit-resource",
	"config-teams",
	"score-activity",
	"upload-homework",
	"make-test",
	"student-curricula",	
	"ver-sabana-course",
	"add-comment",
	"add-noticia",
	"tv",
	"recorded",
	"recording",
	"profesion",

	//facturacion
	'admin-folios',
	'datos-generales',
	'sistema',
	
	//reportes
	'reporte-general',
	'reporte-alumno-modulo',
	'edit-student',
	'report-card',
	'transcript-cc',
	'transcript-sc',
	'bank-reference',
	'unsubscribe',
	'report-card-teacher',
	'solicitud',
	'view-solicitud',
	'referencia-bancaria',
	'score-activity-new',
	'reinscripcion',
	'concepto',
	'sincronizar',
	'ver-calendario',
	'estatus-financiero',
	'mensaje',
	'add-mensaje',
	'inbox',
	'reply-inbox',
	'test-docente',
	'info-docente',
	'view-inbox',
	'doc-docente',
	'add-docdocente',
	'repositorio',
	'lst-docentes',
	'cat-doc-docente',
	'add-cat-doc-docente',
	'materias',
	'vehiculos',
	'report-materia',
	'report-docentes',
	'doc-mat',
	'tabla-costo',
	'prog-academico',
	'prog-materia',
	'validarpago-adjuntar',
	'msj',
	'personal-academico',
	'perfil',
	'grupo',
	'aviso',
    'calification',
    'add-ine',
    'student-certificacion',
    'usuarios',
    'envia-info',
    'reporte-region',
    'reporte-b',
    'prueba',
    'grupos',
    'log',
    'gps',
    'usuarios-admin',
    'usuarios-doc',
	//'usuarios-sol',
	'reporte-evaluadores',
	'reporte-certificaciones',
	//dictamenes
	'dictum',
	// Rutas del Capacitador
	'capacitador_profile',
	'gpscap',
	'capacitador_original_profile',
	'gpscapori',
	'edit-modules-group',
	'edit-modules-group-original',
	'add-group-activity',
	'edit-group-activity',
	'configuracion-group-examen',
	'score-group-activity-new',
	'add-group-resource',
	'edit-group-resource',
	'add-group-noticia',
	'upload-group-homework',
	'make-group-test',
	'candidatos',
	'add-group-topic',
	'add-group-comment',
	'foro',
	'respuestas',
	'make-group-final-test',
	'revision-portafolio',
	'revision-externo',

	// Proceso de Certificacion
	'invitacion',
	'preregistro',
	'progreso',
	'add-group-inform',
	'add-group-attendance',
	'reporte-evaluaciones',
	'reporte-certificados',
	'asistencia-municipios',

	// Registro 2021
	'registro2021',

	// Examenes Finales
	'add-final-test',
	'date-final-test',

	'edit-estado-municipio',
	'permisos',
	'registro-encargo',
	'prospectos',
	'register-multiple'
);

if(!in_array($_GET['page'], $pages))
{
	$_GET['page'] = "homepage";
}

// echo $_GET['id'];
// exit;

$smarty->assign('positionId', $User['positionId']);

include_once(DOC_ROOT.'/modules/user.php');
include_once(DOC_ROOT.'/modules/'.$_GET['page'].'.php');

$smarty->assign('page', $_GET['page']);
$smarty->assign('section', $_GET['section']);

if($User['userId'])
	$AccessMod = $user->GetModulesAccess();

$smarty->assign('AccessMod',$AccessMod);
$smarty->assign('User',$User);

$includedTpl =  $_GET['page'];
if($_GET['section'])
{
	$includedTpl =  $_GET['page']."_".$_GET['section'];
}
$smarty->assign('includedTpl', $includedTpl);

//print_r($_GET); exit;

if(isset($_GET['vp'])){
$smarty->assign("vistaPrevia",$_GET['vp']);
}else{
$smarty->assign("vistaPrevia",0);
}

$smarty->assign('lang', $lang);
$smarty->assign('timestamp', time());
$smarty->assign('rand', rand());

ini_set("display_errors", "ON"); 
$showErrors = "E_ALL";
error_reporting($showErrors);

if($includedTpl == 'login'){ 
	$smarty->display(DOC_ROOT.'/templates/login_new.tpl');
}
else if($includedTpl == 'recuperacion'){
	$smarty->display(DOC_ROOT.'/templates/recuperacion.tpl');
}
else
{
		
	$smarty->display(DOC_ROOT.'/templates/index_new.tpl');
}


?>
