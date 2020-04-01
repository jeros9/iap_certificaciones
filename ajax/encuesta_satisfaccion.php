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
	if($_SESSION["User"]["type"] != "Docente" && $_SESSION["User"]["type"] != "Administrador" && $_SESSION['User']['type'] != "" && $_SESSION["User"]["type"] != "Director"){
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
                    <title>Encuesta de Satisfacción</title>
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
                            <td style="text-align:center;width:33%;">
                                <img src="'.DOC_ROOT.'/images/logoconocer.png" width="150px" >
                            </td>
                            <td style="text-align:center;width:33%;">
                                <strong>Encuesta de Satisfacción del Proceso de Evaluación de Competencia</strong>
                            </td>
                            <td style="text-align:center;width:33%;">
                                <img src="' . DOC_ROOT . '/images/logo_correo.jpg" width="150px" >
                            </td>
                        </tr>
                    </table>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Estandar:</strong></td>
                            <td colspan="2">' . $data_subject['name'] . '</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Candidato:</strong></td>
                            <td>' . mb_strtoupper($data_user['names'] . ' ' . $data_user['lastNamePaterno'] . ' ' . $data_user['lastNameMaterno']) . '</td>
                            <td>Fecha: ' . $survey['date_dmy'] . '</td>
                        </tr>
                    </table><br>';
    $html .= '      <table style="width:100%;" class="cell-padding">
                    <tr>
                        <td>
                            Conteste las siguientes preguntas marcando con una X la opción que considere adecuada al servicio recibido:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1.- ¿La presentación del Estándar de Competencia y la aplicación del diagnóstico, lo realizaron sin costo para usted?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][0]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][0]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][0]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.- ¿Le proporcionaron la información suficiente y necesaria para iniciar su proceso de evaluación?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][1]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][1]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][1]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.- ¿Durante el proceso de evaluación le dieron trato digno y respetuoso?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][2]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][2]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][2]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.- ¿Le realizaron la evaluación sin que la Entidad de Certificación y Evaluación lo condicionarán a tomar un curso de capacitación?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][3]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][3]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][3]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.- ¿Le presentaron y acordaron con Usted el Plan de Evaluación?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][4]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][4]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][4]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.- ¿Recibió retroalimentación de los resultados de su evaluación?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][5]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][5]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][5]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.- ¿El evaluador atendió todas sus dudas?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][6]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][6]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][6]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8.- ¿Le entregaron el certificado de acuerdo al compromiso establecido?<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][7]['affirmative'] == 1 ? 'x' : '_') . '</span> Si<br>
                            <span style="border: solid 1px #000; padding: 3px;width: 5px;">' . ($survey['answers'][7]['negative'] == 1 ? 'x' : '_') . '</span> No, Por qué? <u>' . $survey['answers'][7]['details'] . '</u>
                        </td>
                    </tr>
                    <tr>
                        <td><b>SUGERENCIAS O COMENTARIOS:</b> <u>' . $survey['comments'] . '</ul> <b>¡Muchas Gracias!</b></td>
                    </tr>
                </table><br>';
    $html .= '      <table style="width:100%;">
                        <tr>
                            <td style="padding-left:35px;width:50%;text-align:center;font-size:11pt;">
                                ' . $data_user['firma'] . '<br>
                                <strong>FIRMA DEL CANDIDATO</strong>
                            </td>
                        </tr>
                    </table><br>';
    $html .= '  </body>
            </html>';
	// echo $html;
	// exit;
    # Instanciamos un objeto de la clase DOMPDF.
	$mipdf = new DOMPDF($options);
	$mipdf->setPaper("A4", "portrait");
	$mipdf->loadHtml($html);
	$mipdf->render();
	$mipdf->stream('encuesta_satisfaccion.pdf',array('Attachment' => 0));
			


?>