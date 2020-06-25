<?php
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');
	session_start();
	
	switch($_POST["type"])
	{
        case 'updateForo':
			$smarty->assign('topicsubId', $_POST["topicsubId"]);
			$smarty->assign('positionId', $_POST["positionId"]);
			$smarty->assign('courseId', $_POST['id']);
			$group_forum->setTopicsubId($_POST["topicsubId"]);
			$replies = $group_forum->Replies();
			$smarty->assign('replies', $replies);
			
			$topic = $group_forum->TopicsubInfo();
			$smarty->assign('topic', $topic);
			
			$smarty->assign('id', $_POST["id"]);
			
			if($_SESSION["User"]["positionId"] != 1 && $_SESSION["User"]["positionId"] != 4)
			    $smarty->assign('mnuMain', "modulo");
			
			$smarty->assign("DOC_ROOT", DOC_ROOT);
			$smarty->display(DOC_ROOT.'/templates/lists/new/group-topic-replies.tpl');		
		break;
	
		case 'saveMsj':
		
			// echo '<pre>'; print_r($_POST);
			if( $student->SaveMensaje()){
				echo 'ok[#]';
			}else{
				echo 'fail[#]';
			}
		
		break;
		
		
		case 'saveNew':
		
			// echo '<pre>'; print_r($_POST);
			// exit;
			if( $student->SaveMensaje($_POST['mensaje'])){
				echo 'ok[#]';
			}else{
				echo 'fail[#]';
			}
		
		break;
	
		case 'saveReply':
		
			// echo '<pre>'; print_r($_FILES);
			// echo '<pre>'; print_r($_POST);
			// echo '<pre>'; print_r($_GET);
			// exit;
			// if $_POST['status']
			
			$student->setAsunto($_POST['asunto1'].''.$_POST['asunto2']);
			$student->setYoId($_SESSION['User']['userId']);
			$student->setStatusjj($_POST['status']);
			$student->setUsuariojjId($_POST['yoId']);
			$student->setCMId($_POST['courseMId']);
			$student->setMensaje($_POST['mensaje']);
			if( $student->saveReply()){
				echo 'ok[#]';
			}else{
				echo 'fail[#]';
			}
		
		break;
		
		case 'deleteInbox':
		
			// echo '<pre>'; print_r($_POST);
			// exit;
			// echo 'ok[#]';
			if( $module->deleteInbox($_POST['Id'])){
				echo 'ok[#]';
			}else{
				echo 'fail[#]';
			}
				
		
		break;
		
		case 'accionesEliminar':
		
		// echo '<pre>'; print_r($_POST);
		// exit;
			foreach($_POST as $key=>$aux){
				$c = explode('_',$key);
				if($c[0]=='check'){
					$module->deleteInbox($c[1]);
				}
			}
			
		
		break;
		
		
		case 'accionesFavoritos':
		
		// echo '<pre>'; print_r($_POST);
		// exit;
			foreach($_POST as $key=>$aux){
				$c = explode('_',$key);
				if($c[0]=='check'){
					$module->addFavorito($c[1]);
				}
			}
			
		
		break;
		
		case 'onEnviaMsj':
		
		// echo '<pre>'; print_r($_POST);
		// echo '<pre>'; print_r($_FILES);
		// exit;
			// echo '<pre>'; print_r($_POST);
			// $module->setPerId($_POST['mensaje']);
			$module->setTitulo($_POST['titulo']);
			$module->setEnviaId($_SESSION['User']['userId']);
			$module->setMensaje($_POST['description']);
			if( $module->onEnviaMsj($_POST['Id'])){
				echo 'ok[#]';
			}else{
				echo 'fail[#]';
			}
		
		break;
	}

?>
