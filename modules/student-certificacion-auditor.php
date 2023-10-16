<?php
	$registros = $student->CertificacionStident($_GET["id"], " AND c.courseId = {$_GET['course']}"); 
	$smarty->assign('cId', $_GET["cId"] );
	$smarty->assign('id', $_GET["id"] );
	$smarty->assign('auxTpl', $_GET["auxTpl"] );
	$smarty->assign('registros', $registros);
