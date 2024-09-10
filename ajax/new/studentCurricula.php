<?php
// echo 'lled';
// echo '<pre>'; print_r($_GET);
// echo '<pre>'; print_r($_POST);
// exit;
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT . '/libraries.php');

session_start();

switch ($_POST["type"]) {
	case "Student":

		$group->setCourseId($_POST['id']);
		$students = $group->DefaultGroup();
		$smarty->assign("courseId", $_POST['id']);
		$smarty->assign("DOC_ROOT", DOC_ROOT);
		$smarty->assign("students", $students);
		$smarty->assign("tipo", $_POST['tipo']);
		$smarty->assign("tip", $_POST['tip']);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-student.tpl');

		break;


	case "VerSolicitud":

		$group->setCourseId($_POST['id']);
		$students = $group->DefaultGroup();
		$smarty->assign("courseId", $_POST['id']);
		$smarty->assign("DOC_ROOT", DOC_ROOT);
		$smarty->assign("students", $students);
		$smarty->assign("tip", $_POST['tip']);
		$smarty->display(DOC_ROOT . '/templates/actas.tpl');

		break;

	case "StudentAdmin":

		$group->setCourseId($_POST['id']);
		$students = $group->DefaultGroup();
		$smarty->assign("courseId", $_POST['id']);
		$smarty->assign("tip", $_POST['tip']);
		$smarty->assign("DOC_ROOT", DOC_ROOT);
		$smarty->assign("students", $students);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-studentadmin.tpl');

		break;

	case "calificaciones":

		$module->setCourseModuleId($_POST['id']);
		$infoModule = $module->InfoCourseModule();
		$courseId = $infoModule['courseId'];
		//	print_r($infoModule);
		$activity->setCourseModuleId($_POST['id']);
		$activityInfoTask = $activity->Enumerate("Tarea");
		$userId = $_SESSION['User']['userId'];

		$activity->setUserId($userId);
		//$ponderation=$activity->Score();

		foreach ($activityInfoTask as $key => $fila) {
			$activity->setCourseModuleId($_POST['id']);
			$activity->setActivityId($fila['activityId']);
			$activityInfoTask[$key]['calificacion'] = $activity->Score();
			$activityInfoTask[$key]['retroTotal'] = $activity->Retro();
		}
		//print_r($activityInfoTask);exit;

		//print_r($fila['activityId']);

		//print_r($infoModule);
		//$students=$group->DefaultGroup();
		//print_r($_POST);
		//$smarty->assign("DOC_ROOT", DOC_ROOT);
		$tipo = 1;
		$smarty->assign("tipo", $tipo);
		$smarty->assign("tareas", $activityInfoTask);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-ponderation-student.tpl');

		break;

	case "calificacionesExa":
		$tipo = 2;
		$module->setCourseModuleId($_POST['id']);
		$infoModule = $module->InfoCourseModule();
		$courseId = $infoModule['courseId'];
		//	print_r($infoModule);
		$activity->setCourseModuleId($_POST['id']);
		$activityInfoTask = $activity->Enumerate("Examen");
		$userId = $_SESSION['User']['userId'];

		$activity->setUserId($userId);
		//$ponderation=$activity->Score();

		foreach ($activityInfoTask as $key => $fila) {
			$activity->setCourseModuleId($_POST['id']);
			$activity->setActivityId($fila['activityId']);
			$activityInfoTask[$key]['calificacion'] = $activity->Score();
			$activityInfoTask[$key]['retroTotal'] = $activity->Retro();
		}
		//print_r($activityInfoTask);exit;

		//print_r($fila['activityId']);

		//print_r($infoModule);
		//$students=$group->DefaultGroup();
		//print_r($_POST);
		//$smarty->assign("DOC_ROOT", DOC_ROOT);
		$smarty->assign("tipo", $tipo);
		$smarty->assign("tareas", $activityInfoTask);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-ponderation-student.tpl');

		break;

	case "deleteStudentCurricula":

		$student->setUserId($_POST['userId']);
		$student->setCourseId($_POST['courseId']);

		if (!$student->DeleteStudentCurricula()) {
			echo "fail[#]";
			//$util->setError(10028, "error","Ocurrio un error al eliminar a este alumno");
			//$util->PrintErrors();
			$smarty->display(DOC_ROOT . '/templates/boxes/status_on_popup.tpl');
		} else {
			echo "ok[#]";
			$util->setError(10028, "complete", "Alumno eliminado con exito de esta curricula");
			$util->PrintErrors();
			$smarty->display(DOC_ROOT . '/templates/boxes/status_on_popup.tpl');
		}



	case "StudentInactivo":

		$group->setCourseId($_POST['id']);
		$students = $group->DefaultGroupInactivo();
		$smarty->assign("tip", $_POST['tip']);
		$smarty->assign("DOC_ROOT", DOC_ROOT);
		$smarty->assign("students", $students);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-student.tpl');

		break;

	case "StudentInactivoAdmin":

		$group->setCourseId($_POST['id']);
		$students = $group->DefaultGroupInactivo();
		$smarty->assign("tip", $_POST['tip']);
		$smarty->assign("DOC_ROOT", DOC_ROOT);
		$smarty->assign("students", $students);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-studentadmin.tpl');

		break;

	case 'saveNumReferencia';

		// echo '<pre>'; print_r($_POST);
		// exit;
		if ($group->saveNumReferencia()) {
			echo 'ok[#]';
			echo '<div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			 Los datos se guardaron correctamente
			</div>';
			echo $_SESSION['msj'] = 'si';
		} else {
			echo 'fail[#]';
		}

		break;


	case 'saveMatricula';

		// echo '<pre>'; print_r($_POST);
		// exit;
		if ($group->saveMatricula()) {
			echo 'ok[#]';
			echo '<div class="alert alert-info alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			 Los datos se guardaron correctamente
			</div>';
			echo $_SESSION['msj'] = 'si';
		} else {
			echo 'fail[#]';
		}

		break;

	case 'descargarConstancias':



		$infoStudent = $student->InfoEstudiate($_POST["Id"]);
		$infoTypeSol = $solicitud->infoSolicitud($_POST["tipodocId"]);


		// echo '<pre>'; print_r($infoTypeSol);
		// exit;


		$student->setUserId($_POST["Id"]);
		$activeCourses = $student->StudentCourses("activo", "si");
		$finishedCourses = $student->StudentCourses("finalizado");


		$smarty->assign("finishedCourses", $finishedCourses);
		$smarty->assign("solicitudId", $_POST['tipodocId']);
		$smarty->assign("userId", $_POST['Id']);


		$smarty->assign("infoTypeSol", $infoTypeSol);
		$smarty->assign("infoStudent", $infoStudent);
		$smarty->assign("activeCourses", $activeCourses);
		$smarty->display(DOC_ROOT . '/templates/new/view-curricula-admin.tpl');



		break;

	case 'onBuscar':

		// echo '<pre>'; print_r($_POST);
		$arrPage = array();		// ---- arreglo donde guarda los resultados de la paginacion...para usarse en footer-pages-links.tpl
		$viewPage = 1;			// ---- por default se toma la primera pagina, por si aun no esta definidala en la variable GET
		$rowsPerPage = 500;		//<<--- se podria tomar este valor de una variable o constante global, o especificarla para un caso particular
		$pageVar = 'p';	// ---- el nombre de la variable en GET que trae la pagina a mostrar, en este caso se usa viewPage para pasar la pagina a visualizar
		if (isset($_GET["$pageVar"]))
			$viewPage = $_GET["$pageVar"];	//si ya esta definida la variable GET['viewPage'] tomar el valor de esta

		$coursesCount = $course->EnumerateCount();
		$lstMajor = $major->Enumerate();

		$course->setActivo($_POST['activo']);
		$course->setModalidad($_POST['modalidad']);
		$course->setCurricula($_POST['curricula']);
		$result = $course->EnumerateByPage($viewPage, $rowsPerPage, $pageVar, WEB_ROOT . '/history-subject', $arrPage);
		$smarty->assign('subjects', $result);
		$smarty->display(DOC_ROOT . '/templates/lists/new/courses.tpl');

		break;

	case 'addSaveSolicitud':


		// echo '<pre>'; print_r($_POST);
		$activa = 0;
		$inactiva = 0;
		foreach ($_POST as $key => $aux) {
			$g = explode('_', $key);
			if ($g[0] == 'activa') {
				if ($aux == 'on') {
					$valoractiva = $g[1];
					$activa++;
				}
			}
			if ($g[0] == 'finalizada') {
				if ($aux == 'on') {
					$valorinactiva = $g[1];
					$inactiva++;
				}
			}
		}
		if (($activa + $inactiva) <= 0) {
			echo 'fail[#]';
			echo '<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Debe seleccionar al menos una curricula
						</div>';
			exit;
		}

		if (($activa + $inactiva) > 1) {
			echo 'fail[#]';
			echo '<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Solo puede seleccionar una curricula
						</div>';
			exit;
		}

		// echo $valoractiva.'___'; 
		// echo $valorinactiva; 
		// echo '<pre>'; print_r($_POST);
		// exit;
		if ($valoractiva <> '') {
			$cursoId = $valoractiva;
		}

		if ($valorinactiva <> '') {
			$cursoId = $valorinactiva;
		}

		// echo $cursoId;
		// exit;

		$solicitud->setTipo($_POST['solicitudId']);
		$solicitud->setCursoId($cursoId);
		// $solicitud->setPrecio($precio);
		if ($Id = $solicitud->SaveSolicitudAdmin($_POST['userId'])) {
			echo 'ok[#]';
			echo $Id;
			echo '[#]';
			echo $_POST['userId'];
			// echo '<div class="alert alert-info alert-dismissable">
			// <button type="button" class="close" data-dismiss="alert">&times;</button>
			// La solicitud se genero correctamente
			// </div>';
			// echo '[#]';
			// $lstSol = $solicitud->arraySolicitudes();
			// $registros = $solicitud->enumarateSolicitudesStden();
			// $smarty->assign('registros', $registros);
			// $smarty->assign("lstSol", $lstSol);
			// $smarty->display(DOC_ROOT.'/templates/lists/view-solicitud.tpl');
		} else {
			echo 'fail[#]';
		}

		break;

	case 'editPeriodos':


		$course->setCourseId($_POST["id"]);

		$date = date("d-m-Y");
		$addedModules = $course->AddedCourseModules();


		// echo '<pre>'; print_r($addedModules);
		// exit;

		//checar a que curriculas tengo permiso
		if (in_array(2, $info["roles"])) {
			$smarty->assign('docente', 1);
			$permisosDocente = $user->PermisosDocente();

			foreach ($addedModules as $key => $value) {
				if (!in_array($value["courseModuleId"], $permisosDocente["courseModule"])) {
					unset($addedModules[$key]);
				}
			}
		}
		//

		$smarty->assign('date', $date);
		$smarty->assign('invoiceId', $_GET["id"]);
		$smarty->assign('subjects', $addedModules);
		$smarty->display(DOC_ROOT . '/templates/new/view-periodos.tpl');

		break;


	case 'savePeriodos':

		// echo '<pre>'; print_r($_POST);
		if ($course->savePeriodos()) {
			// echo "ok[#]";
			// $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
		} else {
			echo 'fail[#]';
		}


		break;
	case 'addProspectCourse':
		$courseId = intval($_POST['courseId']);
		$userId = intval($_POST['userId']);
		$capacitador = $_POST['capacitador'];
		$alineador = $_POST['alineador'];
		$evaluador = $_POST['evaluador'];
		$campos = [
			'courseId' => 	[
				'value' => $courseId,
				'messages' => ['required' => "Por favor, no se olvide de seleccionar la currícula."],
				'types' => ['required']
			],
			'capacitador' => 	[
				'value' => $capacitador,
				'messages' => ['required' => "Por favor, no se olvide de seleccionar el capacitador."],
				'types' => ['required']
			],
			'alineador' => 	[
				'value' => $alineador,
				'messages' => ['required' => "Por favor, no se olvide de seleccionar el alineador."],
				'types' => ['required']
			],
			'evaluador' => 	[
				'value' => $evaluador,
				'messages' => ['required' => "Por favor, no se olvide de seleccionar el evaluador."],
				'types' => ['required']
			],
		];
		$errors = $util->validationData($campos);
		if (!empty($errors)) {
			header('HTTP/1.1 422 Unprocessable Entity');
			header('Content-Type: application/json; charset=UTF-8');
			echo json_encode([
				'errors'    => $errors
			]);
			exit;
		}

		$course->setCourseId($courseId);
		$infoCourse = $course->Info();
		$dataProspect = $user->getProspect("prospects.id = {$userId}");
		$dataProspect = $dataProspect[0];
		$dataUser = $user->getUser("email = '{$dataProspect['email']}'");
		if (isset($dataUser['email'])) { //Ya existe un usuario con este correo 
			$course->setCourseId($courseId);
			$courseInfo = $course->Info();
			$id = $dataUser['userId'];
			$password = $dataUser['password'];
			$response = $student->AddUserToCurricula($id, $courseId, $dataProspect['name'] . " " . $dataProspect['firstSurname'] . " " . $dataProspect['secondSurname'], $dataProspect['email'], $password, $courseInfo["majorName"],  $courseInfo["name"], 0, '');

			 
			if ($response == "Este alumno ya esta registrado en esta curricula. Favor de Seleccionar otra Curricula") {
				header('HTTP/1.1 422 Unprocessable Entity');
				header('Content-Type: application/json; charset=UTF-8');
				echo json_encode([
					'errors'    => [
						'courseId' => $response
					]
				]);
				exit;
			}
			$_POST['id'] = $id;
			$_POST['subjectId'] = $courseInfo['subjectId'];
			$_POST["personalId"] = $capacitador;
			$personal->saveCalificadorUsuario();

			$_POST["personalId"] = $alineador;
			$personal->saveCapacitadorUsuario();

			$_POST["personalId"] = $evaluador;
			$personal->saveCapacitadorOriginalUsuario();
			echo json_encode([
				'growl'		=> true,
				'type'		=> 'success',
				'message'	=> $response,
				'reload'	=> true
			]);
			exit;
		} else { //No existe, así que se creará
			$password = date("His") . rand(5, 15);
			$user->setControlNumber();
			$usuario = $user->getControlNumber();
			$user->setCiudadT($dataProspect['cityId']);
			$user->setNames($dataProspect['name']);
			$user->setLastNamePaterno($dataProspect['firstSurname']);
			$user->setLastNameMaterno($dataProspect['secondSurname']);
			$user->setEmail($dataProspect['email']);
			$user->setPhone($dataProspect['phone']);
			$user->setWorkplaceOcupation($dataProspect['encargo']);
			$user->setPassword($password);
			$id = $user->prospectToUser();
			$course->setCourseId($courseId);
			$courseInfo = $course->Info();
			$_POST['id'] = $id;
			$_POST['subjectId'] = $courseInfo['subjectId'];
			$_POST["personalId"] = $capacitador;
			$personal->saveCalificadorUsuario();

			$_POST["personalId"] = $_POST['alineador'];
			$personal->saveCapacitadorUsuario();

			$_POST["personalId"] = $_POST['evaluador'];
			$personal->saveCapacitadorOriginalUsuario();

			$student->AddUserToCurricula($id, $courseId, $dataProspect['name'] . " " . $dataProspect['firstSurname'] . " " . $dataProspect['secondSurname'], $dataProspect['email'], $password, $courseInfo["majorName"],  $courseInfo["name"], 0, '');
		}

		echo json_encode([
			'growl'		=> true,
			'type'		=> 'success',
			'message'	=> 'Prospecto convertido en usuario y agregado a la currícula',
			'reload'	=> true
		]);
		break;

	case "saveAddStudentRegister":


		$_POST['password'] = date("His") . rand(5, 15);

		$status = $_POST['status'];

		//datos personales
		$student->setPermiso($_POST['permiso']);
		$student->setControlNumber();
		$student->setNames($_POST['names']);
		$student->setLastNamePaterno($_POST['lastNamePaterno']);
		$student->setLastNameMaterno($_POST['lastNameMaterno']);
		// $student->setSexo($_POST['sexo']);
		// $student->setBirthdate($_POST['day'],$_POST['month'],$_POST['year']);
		// $student->setMaritalStatus($_POST['maritalStatus']);
		$student->setPassword(trim($_POST['password']));

		//domicilio
		// $student->setStreet($_POST['street']);
		// $student->setNumber($_POST['number']);
		// $student->setColony($_POST['colony']);
		$student->setCiudadT($_POST['ciudad']);
		// $student->setState($_POST['estado']);
		// $student->setCountry($_POST['pais']);
		// $student->setPostalCode($_POST['postalCode']);
		$student->setTipoSolitante($_POST['tipoSolicitante']);
		//datos de contacto
		$student->setEmail($_POST['email']);
		// $student->setPhone($_POST['phone']);
		// $student->setFax($_POST['fax']);
		$student->setMobile($_POST['mobile']);
		if (isset($_POST['typeOrder'])) {
			$pcOrder->setTypeOrderId($_POST['typeOrder']);
			$typeOrder = $pcOrder->Info();
			$period->setPeriodId($_POST['period']);
			$courseInfo = $period->GetCourse($_POST['typeOrder']);
			$student->setWorkplacePosition($typeOrder['orderName']);
			$student->setTypeOrderId($_POST['typeOrder']);
			$_POST["curricula"] = $courseInfo['courseId'];
		}


		if (!$student->Save("createCurricula")) {
			echo "fail[#]";

			$smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
			echo "[#]" . $student->getStudentId();
			echo "[#]" . $student->getFirma();
		} else {
			$course->setCourseId($_POST['curricula']);
			$courseInfo = $course->Info();
			$_POST['id'] = $student->getStudentId();
			$_POST['subjectId'] = $courseInfo['subjectId'];
			if ($_POST['capacitador'] != "") {
				$_POST["personalId"] = $_POST['capacitador'];
				$personal->saveCalificadorUsuario();
			}
			if ($_POST['alineador'] != "") {
				$_POST["personalId"] = $_POST['alineador'];
				$personal->saveCapacitadorUsuario();
			}
			if ($_POST['evaluador'] != "") {
				$_POST["personalId"] = $_POST['evaluador'];
				$personal->saveCapacitadorOriginalUsuario();
			}
			echo "ok[#]";
			$smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
			echo "[#]" . $student->getStudentId();
			echo "[#]" . $student->getFirma();
		}
		break;
}
