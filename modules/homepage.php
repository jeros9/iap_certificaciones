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

	$municipalities = [
		91,
		88,
		132,
		167,
		151,
		157,
		124,
		189,
		81,
		142,
		193,
		96,
		175,
		147,
		156,
		141,
		109,
		179,
		168,
		2495,
		176,
		140,
		145,
		2494,
		128,
		97,
		121,
		112,
		134,
		177,
		110,
		152,
		120,
		89,
		86,
		154,
		183,
		99,
		130,
		158,
		2498,
		137,
		83,
		119,
		181,
		180
	];	
	$allowed = false;
	if($_SESSION['User']['type'] == 'student')
	{
		$municipality = intval($info['workplaceCity']);
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