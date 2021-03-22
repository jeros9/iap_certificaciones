<?php
	include_once('../initPdf.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	use Dompdf\Adapter\CPDF;
	use Dompdf\Dompdf;
	use Dompdf\Exception;

	session_start();
	
	// echo "<pre>"; print_r($_SESSION["User"]);
	// exit;
	if($_SESSION["User"]["type"] != "Docente" && $_SESSION["User"]["type"] != "Administrador" && $_SESSION['User']['type'] != ""){
		exit;
		
	}
    $student->setUserId($_GET['userId']);
    $course->setCourseId($_GET['courseId']);
    $data_course = $course->Info();
    $student->setSubjectId($data_course['subjectId']);
    $data_user  = $student->GetInfo();
    $subject->setSubjectId($data_course['subjectId']);
    $data_subject = $subject->Info();
    $survey = $student->getSurvey();
	
    //$firma = $student->extraeFirma($info["userId"],1,'course',$_GET['courseId']);
	// echo "<pre>"; print_r($firma);
    // exit;
    $footer = '<footer></footer>';
	$html .= "
            <html>
                <head>
                    <title>Acuse de recibo de Certificado</title>
                    <style type='text/css'>
                        table.tb-border {
                            border-collapse: collapse;
                        }
                        table.tb-border, table.tb-border th, table.tb-border td {
                            border: 1px solid black;
                        }
                        table.cell-padding td {
                            padding: 8px 5px;
                        }
                        .bg-gray {
                            background-color: #b2b2b2;
                        }
                        @page {
                            margin-top: 70px;
                            margin-bottom: 55px;
                            margin-left: 35px;
                            margin-right: 35px;
                        }            
                        footer {
                            position: fixed; 
                            bottom: -35px; 
                            left: 0px; 
                            right: 0px;
                            height: 80px;
                        }
                        body {
                            font-size: 10pt;
                        }
                        table {
                            page-break-inside: avoid !important;
                        }
                    </style>
                </head>
                <body>" . $footer;
	$html .= '      <table style="width:100%;">
                        <tr>
                            <td style="text-align:right;padding-right:25px;width: 20%;">
                                <img src="' . DOC_ROOT . '/images/logo_correo.jpg" width="120px">
                            </td>
                            <td style="text-align:center;width: 60%;">
                                <h4>ECE215-13</h4>
                                <h4>Entidad de Certificación y Evaluación</h4>
                            </td>
                            <td style="text-align:left;padding-left:25px;width: 20%;">
                                <img src="' . DOC_ROOT . '/images/logoconocer.png" width="120px">
                            </td>
                        </tr>
                    </table><br><br><br>';
    $html .= '      <table style="width:100%;" class="cell-padding">
                        <tr>
                            <td style="text-align:right;">
                                Tuxtla Gutiérrez, Chiapas<br>
                                ' . $survey['date_dmy'] . '
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Manifiesto haber recibido por parte de la entidad de certificación y evaluación ECE 213-15, el certificado de competencia Laboral digital en el estándar ' . $data_subject['name'] . '
                            </td>
                        </tr>
                    </table><br>';
    $html .= '      <table style="width:100%;">
                        <tr>
                            <td style="padding-left:35px;width:50%;text-align:center;font-size:11pt;">
                                <strong>Atentamente</strong><br>
                                ' . $data_user['firma'] . '<br>
                                ' . mb_strtoupper($data_user['names'] . ' ' . $data_user['lastNamePaterno'] . ' ' . $data_user['lastNameMaterno']) . '
                            </td>
                        </tr>
                    </table><br>';
    $html .= '  </body>
            </html>';
	// echo $html;
	// exit;
	# Instanciamos un objeto de la clase DOMPDF.
	$mipdf = new DOMPDF();
	$mipdf->setPaper("A4", "portrait");
	$mipdf->loadHtml($html);
	$mipdf->render();
	$mipdf->stream('acuse_certificado.pdf',array('Attachment' => 0));
			


?>