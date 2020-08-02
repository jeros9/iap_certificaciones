<?php
	include_once('../initPdf.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	use Dompdf\Adapter\CPDF;
	use Dompdf\Dompdf;
	use Dompdf\Exception;

	session_start();
	
	//echo "<pre>"; print_r($_SESSION["User"]);exit;
	if($_SESSION["User"]["type"] != "Docente" && $_SESSION["User"]["type"] != "Administrador" && $_SESSION['User']['type'] != ""){
		exit;
    }
    $userId = intval($_GET['userId']);
    $courseId = intval($_GET['courseId']);
	$group_final_test->setCourseId($courseId);
    $final_test = $group_final_test->EnumerateResult($userId);
    $options = [
        'vof' => [
            'opcionA' => 'V',
            'opcionB' => 'F'
        ],
        'mul' => [
            'opcionA' => 'A',
            'opcionB' => 'B',
            'opcionC' => 'C',
            'opcionD' => 'D',
            'opcionE' => 'E'
        ]
    ];
	//echo "<pre>"; print_r($final_test); exit;
    //$firma = $student->extraeFirma($info["userId"],1,'course',$_GET['courseId']);
	// echo "<pre>"; print_r($firma);
    // exit;
    $tbody = "";
    $category = 0;
    $numCat = 1;
    $last_element = end($final_test['questions']);
    foreach($final_test['questions'] as $item)
    {
        $rowCat = "";
        $rowSpan = 0;
        if($category != $item['categoryId'])
        {
            $tbody = str_replace("totalRow", $numCat, $tbody);
            $rowCat = '<tr>
                            <td style="text-align: center;" rowSpan="totalRow">' . $item['codes'] . '</td>
                            <td colspan="3">' . $item['category'] . '</td>
                        </tr>';
            $category = $item['categoryId'];
            $numCat = 1;
        }
        $tbody .= $rowCat;
        $tbody .= '<tr>
                        <td style="border: 0;border-right: 1px solid #000 !important;">' . $item['question'] . '</td>
                        <td style="border: 0;text-align: center;border-right: 1px solid #000 !important;">' . $options[$item['questionType']][$item['answer']] . '</td>
                        <td style="border: 0;text-align: center;border-right: 1px solid #000 !important;">' . $options[$item['questionType']][$item['respuesta']] . '</td>
                    </tr>';
        $numCat++;
        if ($item == $last_element)
            $tbody = str_replace("totalRow", $numCat, $tbody);
    }
	$html .= "
            <html>
                <head>
                    <title>RESPUESTAS EVALUACIÓN FINAL</title>
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
                        #exam{
                            font-size: 12px !important;
                            font-family: verdana, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }
                        #exam tr{
                            page-break-before: always;
                        }
                        #exam td{
                            border: 1px solid black;
                            text-align: center;
                            /*padding: 8px;*/
                            padding: 5px;
                            margin: 0;
                           
                        }
                        #exam table.inner{
                            width: 100%;
                            margin: 0;
                        }
                        #exam table.inner td{
                            padding: 0;
                            width: 50%;
                            margin: 0;
                            padding: 0;
                            border: 0;
                        }
                         #exam table.inner tr td{
                            border-bottom: 1px solid black;
                        }
                        #exam table.inner tr:last-child td{
                            border-bottom: none;
                        }
                        #exam th {
                            border: 1px solid black;
                            text-align: center;
                            padding: 8px;
                            background-color: #dddddd;
                        }
                    </style>
                </head>
                <body>";
    $html .= '      <table id="exam" style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="4"><strong>RESULTADO DEL EXAMEN FINAL</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;" colspan="4">
                                <p>
                                    <b>Estandar: </b>' . $final_test['course']['name'] . '<br>
                                    <b>Candidato: </b>' . $final_test['info']['names'] . ' ' . $final_test['info']['lastNamePaterno'] . ' ' . $final_test['info']['lastNameMaterno'] . '<br>
                                    <b>Fecha: </b>' . $final_test['initialDate'] . '
                                </p>
                                <p>Utilice la siguiente tabla de respuestas para la calificación de los reactivos correspondientes a la evaluación de conocimientos cuando aplique.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">Código del Reactivo</td>
                            <td style="text-align:center;">Reactivo</td>
                            <td style="text-align:center;">Respuesta Correcta</td>
                            <td style="text-align:center;">Respuesta Candidato</td>
                        </tr>
                        ' . $tbody . '
                    </table><br><br><br>';
    $html .= '      <table style="width:100%;">
                    <tr>
                        <td style="padding-left:35px;width:50%;text-align:center;font-size:11pt;">
                            ' . $final_test['info']['names'] . ' ' . $final_test['info']['lastNamePaterno'] . ' ' . $final_test['info']['lastNameMaterno'] . '<br>
                            ' . mb_strtoupper($info['evaluador']) . '<br>
                            <strong>Preguntas Correctas: </strong> ' . $final_test['info']['correctas'] . '<br>
                            <strong>Preguntas Incorrectas: </strong> ' . $final_test['info']['incorrectas'] . '<br>
                            <strong>Calificación: </strong> ' . $final_test['info']['ponderation'] . ' de ' . $final_test['ponderation'] . '
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
	$mipdf->stream('cedula.pdf',array('Attachment' => 0));
			


?>