<?php
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

$smarty->assign("DOC_ROOT", DOC_ROOT);

session_start();

switch($_POST["type"])
{
	case 'viewModules':
	
		$subjects = $module->EnumerateById($_POST['id']);

		$smarty->assign("id", $_POST['id']);
		$smarty->assign("subjects", $subjects);
		$smarty->display(DOC_ROOT . '/templates/boxes/view-modules-popup.tpl');
		
		break;
		
	case 'saveEditSubject':
	
		$subject->setSubjectId($_POST['subjectId']);
		$subject->setTipo($_POST['tipo']);
		$subject->setSpecialityId($_POST['frmSpeciality']);
		$subject->setSemesterId($_POST['frmSemester']);
		$subject->setClave(strtoupper($_POST['frmClave']));
		$subject->setName(strtoupper($_POST['frmName']));
		$subject->setCredits($_POST['frmCreditos']);
		$subject->setGroupQty($_POST['frmTotalGrupos']);
		$subject->setStudentLimit($_POST['frmEstudiantesLimite']);
		
		if($subject->Update())
		{
			echo 'Ok|';
			$smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
			echo '|';
			$smarty->assign('specialities', $specialities);
			$smarty->assign('semesters', $semesters);

			// -------------------------------------------------------------------------------------------------
			$arrPage = array();		// ---- arreglo donde guarda los resultados de la paginacion...para usarse en footer-pages-links.tpl
			$viewPage = 1;			// ---- por default se toma la primera pagina, por si aun no esta definidala en la variable GET
			$rowsPerPage = 15;		//<<--- se podria tomar este valor de una variable o constante global, o especificarla para un caso particular
			$pageVar = 'viewPage';	// ---- el nombre de la variable en GET que trae la pagina a mostrar, en este caso se usa viewPage para pasar la pagina a visualizar
			if(isset($_POST["$pageVar"]))
				$viewPage = $_POST["$pageVar"];	//si ya esta definida la variable GET['viewPage'] tomar el valor de esta
			//$smarty->assign('subjects', $util->EncodeResult($subject->EnumerateByPage($viewPage, $rowsPerPage, $pageVar, WEB_ROOT.'/subject', $arrPage)));
			$smarty->assign('subjects', $util->EncodeResult($subject->Enumerate()));
			$smarty->assign('arrPage', $arrPage);

			$smarty->display(DOC_ROOT . '/templates/lists/subject.tpl');
		}
		else
		{
			echo 'Fail|';
			$smarty->display(DOC_ROOT . '/templates/boxes/status_on_popup.tpl');
		}
		
		break;
		
	case 'deleteSubject':
	
		$subject->setSubjectId($_POST['subjectId']);
		
		if($subject->Delete())
		{
			echo 'Ok|';
			$smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
			echo '|';
			$smarty->assign('specialities', $specialities);
			$smarty->assign('semesters', $semesters);

			// -------------------------------------------------------------------------------------------------
			$arrPage = array();		// ---- arreglo donde guarda los resultados de la paginacion...para usarse en footer-pages-links.tpl
			$viewPage = 1;			// ---- por default se toma la primera pagina, por si aun no esta definidala en la variable GET
			$rowsPerPage = 15;		//<<--- se podria tomar este valor de una variable o constante global, o especificarla para un caso particular
			$pageVar = 'viewPage';	// ---- el nombre de la variable en GET que trae la pagina a mostrar, en este caso se usa viewPage para pasar la pagina a visualizar
			if(isset($_POST["$pageVar"]))
				$viewPage = $_POST["$pageVar"];	//si ya esta definida la variable GET['viewPage'] tomar el valor de esta
			//$smarty->assign('subjects', $util->EncodeResult($subject->EnumerateByPage($viewPage, $rowsPerPage, $pageVar, WEB_ROOT.'/subject', $arrPage)));
			$smarty->assign('subjects', $util->EncodeResult($subject->Enumerate()));
			$smarty->assign('arrPage', $arrPage);

			$smarty->display(DOC_ROOT . '/templates/lists/subject.tpl');
		}
		else
		{
			echo 'Fail|';
			$smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
		}
		
		break;
		
	case 'deleteActividad':
		if($group_activity->deleteActividad($_POST['Id']))
			echo 'ok[#]';
		else
			echo 'fail[#]';
	    break;
		
}
?>