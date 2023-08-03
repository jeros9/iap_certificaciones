<?php
//var_dump($_SESSION['User']['autorizo']);exit;
	/* For Session Control - Don't remove this */
$x=0;	
// echo '<pre>'; print_r($_SESSION);
// exit;
	
	if ($_GET['id']!=NULL)
		{
		$announcement->setAnnouncementId($_GET['id']);
   		$announcement->Delete();
		}

	 //if($_POST['courseId']){
	 
	  // $student->AddUserToCurriculaFromCatalog($_POST["userId"], $_POST["courseId"],"Ninguno",0);
	 
     // $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
	 // print_r($_POST);exit;
	// $x=1;
	
	//}	
 	// echo "<pre>"; print_r($_SESSION);exit;
	
		$smarty->assign("x",$x);	
	$user->allow_access();	
	/* End Session Control */
	$student->setUserId($_SESSION["User"]["userId"]);
	$info = $student->GetInfo();
	//userId
	$smarty->assign("id",$_SESSION["User"]["userId"]);	
	if($_SESSION['User']['type'] == 'student')
	{
		$student->setUserId($_SESSION['User']['userId']);
		$data_student = $student->GetInfo();
		$smarty->assign("firma", $data_student['firma']);

		$imgFoto = '';
		$filename = strtoupper(trim($info['curp'])) . '.jpg';
		$has_photo = false;
		$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
		if(!$has_photo)
		{
			$filename = $info['controlNumber'] . '.jpg';
			$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
		}
		if(!$has_photo)
		{
			$filename = $info['controlNumber'] . '.JPG';
			$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
		}
		if(!$has_photo)
		{
			$filename = $info['controlNumber'] . '.JPG';
			$has_photo = file_exists(DOC_ROOT . '/alumnos/fotos/' . $filename);
		}
		if($has_photo)
			$imgFoto = "<img src='" . WEB_ROOT . "/alumnos/fotos/" . $filename . "' class='img-responsive' />";
		$smarty->assign("imgFoto", $imgFoto);	
	}
	//tipo de usuario
	$smarty->assign("positionId", $_SESSION['positionId']);	
	
	$curricula = $course->EnumerateActive();
	$smarty->assign("curricula", $curricula);	
	
	//$student->setUserId($_GET["id"]);
	$activeCourses = $student->StudentCourses();
	$smarty->assign("courses", $activeCourses);	
	// print_r($activeCourses);
	// $activeCourses = $student->StudentCourses("activo", "si");
	// echo "<pre>"; print_r($activeCourses);
	// exit;
	$live = $student->StudentLive();
	$hasLive = false;
	if($live != '')
		$hasLive = true;
	$smarty->assign("activeCourses", $activeCourses);	
	$smarty->assign("hasLive", $hasLive);	
	$smarty->assign("live", $live);	

	$inactiveCourses = $student->StudentCourses("inactivo", "si");
	$smarty->assign("inactiveCourses", $inactiveCourses);	

	$finishedCourses = $student->StudentCourses("finalizado");
	
	
	 $student->setCountry(1);
	$lstEstados = $student->EnumerateEstados();
	
	
	
	$smarty->assign("lstEstados", $lstEstados);	
	$smarty->assign("finishedCourses", $finishedCourses);	
	
	$announcements = $announcement->Enumerate(0, 0);
	$smarty->assign('announcements', $announcements);

	
	$allowed = false;
	if($_SESSION['User']['type'] == 'student')
	{
		$municipalities = [];
		$municipios_permitidos =  $student->enumerateMunicipio(7,"AND permiso = 1"); 
		foreach ($municipios_permitidos as $item) {
			$municipalities[] = $item['municipioId'];
		} 
		$municipality = intval($info['ciudadt']);
		$allowed = in_array($municipality, $municipalities);
	}
	
	
	$lstSolicitante=$student->EnumerateSolicitantes();	
	$lstSector = $student->EnumerateSector();	
	$smarty->assign('info', $info);
	$smarty->assign('allowed', $allowed);
	$smarty->assign('lstSector', $lstSector);
	$smarty->assign('lstSolicitante', $lstSolicitante);
	// echo '_'.$_SESSION['msjC'];
// exit;

	$lst = $student->enumerateMunicipio(7);
			$smarty->assign("lst", $lst);	

	$notificaciones=$notificacion->Enumerate();
	$smarty->assign('notificaciones', $notificaciones);
	$smarty->assign('msjC', $_SESSION['msjC']);
	$smarty->assign('msjCc', $_SESSION['msjCc']);
		unset($_SESSION['msjC']);
		unset($_SESSION['msjCc']);
		
	if($_SESSION["User"]["type"]=="Docente"){
		
		$resu=$student->certificacionesEval($_SESSION["User"]["userId"]);	
	}	
	
// echo "<pre>"; print_r($resu);
	// exit;	
	$smarty->assign('resu', $resu);
	// echo '<pre>'; print_r($lstEstados);
	// exit;
	/*
	$subforos=$forum->Enumeratesubf();
    $smarty->assign('subforos', $subforos);
	
	$foros=$forum->Enumerateforos();
    $smarty->assign('foros', $foros);
	
	
	$respuestasforos=$forum->RepliesEnumerate();
	$smarty->assign('replyforum', $respuestasforos);
	
 */
?>