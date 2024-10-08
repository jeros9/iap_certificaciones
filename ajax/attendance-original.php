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
	if($_SESSION["User"]["type"] != "Docente" && $_SESSION["User"]["type"] != "Administrador" && $_SESSION['User']['type'] != "")
		exit;
    
    $group->setCourseId($_GET['cId']);
    $theGroup = $group->DefaultGroupAttendanceCapacitadorOriginal($_GET['coId']);
    $personal->setPersonalId($_GET['coId']);
    $infoPersonal = $personal->Info();
    $course->setCourseId($_GET['cId']);
    $infoCourse = $course->Info();
    $days[0] = $infoCourse['initialDateTraining'];
    for($i = 1; $i < intval($infoCourse['courseDays']); $i++)
    {
        $date = date("Y-m-d", strtotime($days[$i - 1] . " + 1 days"));
        $days[$i] = $date;
    }
    $total_cols = 1 + (count($days) * 2);
    $personalId = 0;
    /* echo "<pre>"; 
    print_r($infoCourse);
    exit; */
    $footer = '<footer><table style="width:100%">
                    <tr>
                        <td style="text-align:center;font-size:12px;">
                            Instituto de Administración Pública del Estado de Chiapas, A.C.<br>
                            Libramiento Norte Poniente No. 2718, Fracc Ladera de la Loma, C.P. 29026<br>
                            Tuxtla Gutiérrez, Chiapas; Teléfonos: (961) 12 515 08, 12 515 09, 12 51510, ext 107<br>
                            <a href="http://www.iapchiapas.edu.mx" target="_blank">www.iapchiapas.edu.mx</a>, <a href="mailto:redconocer@iapchiapas.edu.mx" target="_top">redconocer@iapchiapas.edu.mx</a>
                        </td>
                    </tr>
                </table></footer>';
	$html .= "
            <html>
                <head>
                    <title>Lista de Asistencia</title>
                    <style type='text/css'>
                        table.tb-border {
                            border-collapse: collapse;
                        }
                        table.tb-border, table.tb-border th, table.tb-border td {
                            border: 1px solid black;
                        }
                        table.cell-padding td {
                            padding: 3px 3px;
                        }
                        .bg-gray {
                            background-color: #b2b2b2;
                        }
                        @page {
                            margin-top: 70px;
                            margin-bottom: 100px;
                            margin-left: 35px;
                            margin-right: 35px;
                        }            
                        footer {
                            position: fixed; 
                            bottom: -65px; 
                            left: 0px; 
                            right: 0px;
                            height: 80px;
                        }
                        body {
                            font-size: 8pt;
                        }
                        table {
                            page-break-inside: auto !important;
                        }
                    </style>
                    <meta charset='UTF-8'/>
                </head>
                <body>" . $footer;
	$html .= '      <table style="width:100%;">
                        <tr>
                            <td style="text-align:right;padding-right:25px;">
                                <img src="' . DOC_ROOT . '/images/logoconocer.png" width="100px" >
                            </td>
                            <td style="text-align:left;padding-left:25px;">
                                <img src="' . DOC_ROOT . '/images/logo_correo.jpg" width="100px" >
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2 style="text-align:center; ">
                                <strong>Lista de Asistencia - ' . $infoPersonal['name'] . ' ' . $infoPersonal['lastname_paterno'] . ' ' . $infoPersonal['lastname_materno'] . '</strong><br>
                                ' . preg_replace('/ /', ' Capacitaci&oacute;n en el Estandar ', $infoCourse['name'], 1) . ' (' . $infoCourse['group'] . ')</strong>
                            </td>
                        </tr>
                    </table>';

    $html .= '<table style="width:100%;" class="tb-border cell-padding">';
    $html .=        '<thead>
                        <tr>
                            <th rowspan="2" class="bg-gray">Alumno</th>';
                            foreach($days as $item)
                                $html .= '<th colspan="2" style="text-align: center;" class="bg-gray">' . $item . '</th>';
    $html .=           '</tr>
                        <tr>';
                            foreach($days as $item)
                                $html .= '<th style="text-align: center;" class="bg-gray">Entrada</th><th style="text-align: center;" class="bg-gray">Salida</th>';
    $html .=           '</tr>
                    </thead>
                    <tbody>';
                    
                        foreach($theGroup as $item)
                        {
                            if($personalId != $item['personalId'])
                            {
                                $html .= '<tr><td colspan="' . $total_cols . '" style="text-align: center;">' . $item['name'] . ' ' . $item['lastname_paterno'] . ' ' . $item['lastname_materno'] . '</td></tr>';
                            }
    $html .=               '<tr>
                                <td class="text-uppercase">' . $item['names'] . ' ' . $item['lastNamePaterno'] . ' ' . $item['lastNameMaterno'] . '<br> / <small>' . $item['municipio'] . '</small></td>';
                                foreach($days as $day => $key)
                                {
    $html .=                        '<td style="text-align: center;">';
                                        if($student->AttendanceOriginal($item['userId'], $infoCourse['courseId'], $key, 'Entrada'))
                                            $html .= '<span style="color: white; background: green; padding: 3px;"> </span>';
                                        else
                                            $html .= '<span style="color: white; background: red; padding: 3px;"> </span>';
    $html .=                        '</td>
                                    <td style="text-align: center;">';
                                        if($student->AttendanceOriginal($item['userId'], $infoCourse['courseId'], $key, 'Salida'))
                                            $html .= '<span style="color: white; background: green; padding: 3px;"> </span>';
                                        else
                                            $html .= '<span style="color: white; background: red; padding: 3px;"> </span>';
    $html .=                        '</td>';
                                }
    $html .=               '</tr>';
                        }
    $html .=       '</tbody>
                </table>
                <br><br><br><br><br><br><br><br>
                <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td style="width: 33%; text-align: center;">
                                    ' . $infoPersonal['name'] . ' ' . $infoPersonal['lastname_paterno'] . ' ' . $infoPersonal['lastname_materno'] . '<br>
                                    Docente
                                </td>
                                <td style="width: 33%;"></td>
                                <td style="width: 33%; text-align: center;">
                                    Erika Aguilar Farrera<br>
                                    Vo. Bo.
                                </td>
                            </tr>
                        </tbody>
                </table>';
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