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
        
    $attendanceDay = $_GET['fecha'];
    $attendanceDay = date('Y-m-d', strtotime($attendanceDay));
    $course_attendance->setAttendanceDay($attendanceDay);
    $municipios = $course_attendance->AttendanceMunicipalities();
    $total_municipios = count($municipios);
    $total_personas = 0;
    foreach($municipios as $item)
        $total_personas += $item['cantidad'];
	
    //$firma = $student->extraeFirma($info["userId"],1,'course',$_GET['courseId']);
	// echo "<pre>"; print_r($firma);
    // exit;
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
                            font-size: 8pt;
                        }
                        table {
                            page-break-inside: avoid !important;
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
                            <td colspan=2 style="text-align:center;">
                                <strong>Asistencia de Municipios | ' . $attendanceDay . '</strong>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;"><strong>Total Municipios: ' . $total_municipios . '</strong></td>
                            <td style="text-align:center;"><strong>Total Personas: ' . $total_personas . '</strong></td>
                        </tr>
                    </table><br>';

    $html .= '<table style="width:100%;" class="tb-border cell-padding">';
    $html .=        '<thead>
                        <tr>
                            <th class="bg-gray">Municipio</th>
                            <th class="bg-gray">Cantidad</th>
                        </tr>    
                    </thead>
                    <tbody>';
                    
                        foreach($municipios as $item)
                        {
    $html .=               '<tr>
                                <td>' . $item['nombre'] . '</td>
                                <td style="text-align: center;">' . $item['cantidad'] . '</td>
                            </tr>';
                        }
    $html .=       '</tbody>
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
	$mipdf->stream('Asistencia.pdf',array('Attachment' => 0));
?>