<?php
// echo "<pre>"; print_r($_POST);
// exit;
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');
session_start();

switch($_POST["type"])
{
   
	case 'enviarArchivo':
	
			if($docente->guadarDoc()){
				echo 'ok[#]';
				echo '
				El Documento se agrego correctamente
				';
				 echo '[#]';
			}else{
				echo 'fail[#]';
			}
	
	break;
	
	
	case "onDeleteCarta":

		if($docente->onDoc($_POST["id"])){  
				echo 'ok[#]';
				echo '
				  El Documento se ha eliminado correctamente
				';
				 echo '[#]';
			}else{
				echo 'fail[#]';
			}
		
	break;
	
	
	
	case "saveEstatus":
	
		if($docente->saveEstatus($_POST["id"])){  
				echo 'ok[#]';
				echo '
				 Los datos se guardaron correctamente
				';
				 echo '[#]';
			}else{
				echo 'fail[#]';
			}
	
	break;
	
	case "buscarGrupos":
	
		// echo "<pre>"; print_r($_POST);
		$lstG = $student->gruposCertificacion($_POST["certificacionId"]);
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		 $smarty->assign("lstG", $lstG);
		$smarty->display(DOC_ROOT.'/templates/lists/select-grupos.tpl');
	
	break;
	
	case "buscarGrupoModal":
		$lstG = $student->gruposCertificacion($_POST["certificacionId"]);
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		 $smarty->assign("lstG", $lstG);
		$smarty->display(DOC_ROOT.'/templates/lists/select-grupos.tpl');
	break;
	
	case "busEval":
	
		// echo "<pre>"; print_r($_POST);
		// exit;
		$lstCalificador = $subject->extraeCalificador($_POST["subjectId"],$_POST["personalId"]);
		 $smarty->assign("lstCalificador", $lstCalificador);
		$smarty->display(DOC_ROOT.'/templates/lists/select-personal.tpl');
	break;
	
	
	case "buscarCertificacion":
		// echo "<pre>"; print_r($_POST);
	// exit;
		
		$_GET = $_POST;
		$students = $student->enumerateOkNum();
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		$smarty->assign("registros", $students);
		$smarty->display(DOC_ROOT.'/templates/lists/usuarios.tpl');
	break;
	
	case "LoadPage":
	
	// echo "<pre>"; print_r($_POST);
	// exit;
	$_GET = $_POST;
		$student->setPages($_POST['page']);
		$students = $student->enumerateOk();
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		 $smarty->assign("registros", $students);
		$smarty->display(DOC_ROOT.'/templates/lists/usuarios.tpl');
	break;
	
	case "buscarCertificacionAdmin":
		if($_POST["pas"]){
			// exit;
			$smarty->assign("page", $_POST["pas"]);
		}
		$_GET = $_POST;
		$student->setPages($_POST['page']);
		$students = $student->enumerateOk();
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		$smarty->assign("registros", $students);
		$smarty->display(DOC_ROOT.'/templates/lists/usuarios-admin.tpl');
	break;
	
	case "LoadPageAdmin":
		$student->setPages($_POST['page']);
		$students = $student->enumerateOk();
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		 $smarty->assign("registros", $students);
		$smarty->display(DOC_ROOT.'/templates/lists/usuarios-admin.tpl');
	break;
	
	
	case "LoadPageSol":
		$student->setPages($_POST['page']);
		$students = $student->enumerateOk();
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		 $smarty->assign("registros", $students);
		$smarty->display(DOC_ROOT.'/templates/lists/usuarios-sol.tpl');
	break;
	
	
	case "LoadPageDoc":
		$student->setPages($_POST['page']);
		$students = $student->enumerateOk();
		$smarty->assign("tipoUs", $_SESSION["User"]["type"]);	
		 $smarty->assign("registros", $students);
		$smarty->display(DOC_ROOT.'/templates/lists/usuarios-doc.tpl');
	break;
	
	case "verForm":
	
		
		$_GET["id"] =$_POST["userId"];
		$_GET["cId"] =$_POST["subjectId"];
		$_GET["auxTpl"] =$_POST["tipo"];
		
		$infoDoc = $solicitud->infoDoc();
		 $smarty->assign("cId", $_POST["subjectId"]);
		 $smarty->assign("id", $_POST["userId"]);
		 $smarty->assign("auxTpl", $_POST["tipo"]);
		 $smarty->assign("infoDoc", $infoDoc);
		$smarty->display(DOC_ROOT.'/templates/new/add-doc.tpl');
	
	break;
	
	case "verFormEva":
	// echo "<pre>"; print_r($_POST);
	// exit;
		$_GET["id"] = $_POST["userId"];
		$_GET["cId"] = $_POST["subjectId"];
		$infoDoc = $solicitud->infoCourse();
		// echo "<pre>"; print_r($_POST);
		$smarty->assign("cId", $_POST["subjectId"]);
		$smarty->assign("id", $_POST["userId"]);
		$smarty->assign("auxTpl", $_POST["tipo"]);
		$smarty->assign("infoDoc", $infoDoc);
		$smarty->display(DOC_ROOT.'/templates/new/add-evaluar.tpl');
	break;
	
	case "sendInfoEvaluador":
	
		// echo "<pre>"; print_r($_POST);
		if($personal->sendInfoEvaluador()){  
			echo 'ok[#]';
			echo '
			 Los datos se guardaron correctamente
			';
			 echo '[#]';
		}else{
			echo 'fail[#]';
		}
	
	break;

	case "addCedula":
		
		if(!$cedulas->hasCedula($_SESSION['User']['userId'], $_POST['user_id'], $_POST['subject_id']))
		{
			$smarty->assign("DOC_ROOT", DOC_ROOT);
			$smarty->assign('personal_id', $_SESSION['User']['userId']);
			$smarty->assign('user_id', $_POST['user_id']);
			$smarty->assign('subject_id', $_POST['subject_id']);
			$smarty->display(DOC_ROOT.'/templates/forms/new/add-cedula.tpl');
		}
		else
		{
			$cedulaId = $cedulas->findCedulaId($_SESSION['User']['userId'], $_POST['user_id'], $_POST['subject_id']);
			$smarty->assign('id', $cedulaId);
			$smarty->assign('btnTitle', 'Visualizar Cédula');
			$smarty->assign('type', 'cedula');
			$smarty->display(DOC_ROOT.'/templates/boxes/new/view-doc.tpl');
		}
	break;

	case "saveAddCedula":
        $cedulas->setPersonalId($_POST['personal_id']);
        $cedulas->setUserId($_POST['user_id']);
        $cedulas->setSubjectId($_POST['subject_id']);
        $cedulas->setMejoresPracticas($_POST['mejores_practicas']);
        $cedulas->setAreasOportunidad($_POST['areas_oportunidad']);
        $cedulas->setCriteriosNoCumplidos($_POST['criterios_no_cubrieron']);
        $cedulas->setRecomendaciones($_POST['recomendaciones']);
        $cedulas->setJuicioEvaluacion($_POST['juicio_evaluacion']);
        $cedulas->setObservaciones($_POST['observaciones']);
		
		if(!$cedulas->Save())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
        }
	break;

	case "addPlan":
		$subject->setSubjectId($_POST['subject_id']);
		$data_subject = $subject->Info();
		$smarty->assign('file_pdf', $data_subject['file_pdf']);
		if(!$planes->hasPlan($_SESSION['User']['userId'], $_POST['user_id'], $_POST['subject_id']))
		{
			$smarty->assign("DOC_ROOT", DOC_ROOT);
			$smarty->assign('personal_id', $_SESSION['User']['userId']);
			$smarty->assign('user_id', $_POST['user_id']);
			$smarty->assign('subject_id', $_POST['subject_id']);
			$smarty->display(DOC_ROOT.'/templates/forms/new/add-plan.tpl');
		}
		else 
		{
			$planId = $planes->findPlanId($_SESSION['User']['userId'], $_POST['user_id'], $_POST['subject_id']);
			$smarty->assign('id', $planId);
			$smarty->assign('btnTitle', 'Visualizar Plan');
			$smarty->assign('type', 'plan');
			$smarty->display(DOC_ROOT.'/templates/boxes/new/view-doc.tpl');
		}
	break;

	case "saveAddPlan":
        $planes->setPersonalId($_POST['personal_id']);
        $planes->setUserId($_POST['user_id']);
        $planes->setSubjectId($_POST['subject_id']);
        $planes->setCapacitacion($_POST['capacitacion']);
        $planes->setLugarDesarrollo($_POST['lugar_desarrollo']);
        $planes->setFechaDesarrollo($_POST['fecha_desarrollo']);
        $planes->setHorarioDesarrollo($_POST['horario_desarrollo']);
        $planes->setLugarResultados($_POST['lugar_resultados']);
        $planes->setFechaResultados($_POST['fecha_resultados']);
		$planes->setHorarioResultados($_POST['horario_resultados']);
		$planes->setRequerimientos($_POST['requerimientos']);
		
		if(!$planes->Save())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
        }
	break;

	case "verFormEvaluacion":
		if($_POST['tipo'] == 1)
		{
			$flag = $planes->hasPlan($_POST['personalId'], $_POST['userId'], $_POST['subjectId']);
			$php_name = 'plan';
			if($flag)
				$id = $planes->findPlanId($_POST['personalId'], $_POST['userId'], $_POST['subjectId']);
		}
		elseif($_POST['tipo'] == 3)
		{
			$flag = $cedulas->hasCedula($_POST['personalId'], $_POST['userId'], $_POST['subjectId']);
			$php_name = 'cedula';
			if($flag)
				$id = $cedulas->findCedulaId($_POST['personalId'], $_POST['userId'], $_POST['subjectId']);
		}
		$subject->setSubjectId($_POST['subjectId']);
		$data_subject = $subject->Info();
		$smarty->assign('file_pdf', $data_subject['file_pdf']);
		if(!$flag)
		{
			$smarty->assign("DOC_ROOT", DOC_ROOT);
			$smarty->assign('personal_id', $_POST['personalId']);
			$smarty->assign('user_id', $_POST['userId']);
			$smarty->assign('subject_id', $_POST['subjectId']);
			$smarty->display(DOC_ROOT.'/templates/forms/new/add-'.$php_name.'.tpl');
		}
		else 
		{
			$smarty->assign('id', $id);
			$smarty->assign('btnTitle', 'Visualizar ' . $php_name);
			$smarty->assign('type', $php_name);
			$smarty->display(DOC_ROOT.'/templates/boxes/new/view-doc.tpl');
		}
	break;
}

?>
