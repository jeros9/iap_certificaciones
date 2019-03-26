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
	if($_SESSION["User"]["type"] != "Docente" && $_SESSION["User"]["type"] != "Administrador"){
		exit;
		
	}
	$cedulas->setCedulaId($_GET['id']);
	$info = $cedulas->GetInfo();
	
    //$firma = $student->extraeFirma($info["userId"],1,'course',$_GET['courseId']);
	// echo "<pre>"; print_r($firma);
    // exit;
    $footer = '<footer><table style="width:100%">
                    <tr>
                        <td style="text-align:center;font-size:12px;">
                            Instituto de Administración Pública del Estado de Chiapas, A.C.<br>
                            Libramiento Norte Poniente No. 2718, Fracc Ladera de la Loma, C.P. 29026<br>
                            Tuxtla Gutiérrez, Chiapas; Teléfonos: (961) 12 515 08, 12 515 09, 12 51510, ext 107<br>
                            <a href="http://www.iapchiapas.edu.mx" target="_blank">www.iapchiapas.org.mx</a>, <a href="mailto:redconocer@iapchiapas.org.mx" target="_top">redconocer@iapchiapas.org.mx</a>
                        </td>
                    </tr>
                </table></footer>';
	$html .= "
            <html>
                <head>
                    <title>CÉDULA DE EVALUACIÓN</title>
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
                            margin: 70px 35px;
                        }            
                        footer {
                            position: fixed; 
                            bottom: -35px; 
                            left: 0px; 
                            right: 0px;
                            height: 80px;
                        }
                    </style>
                </head>
                <body>" . $footer;
	$html .= '      <table style="width:100%;">
                        <tr>
                            <td style="text-align:right;padding-right:25px;">
                                <img src="'.DOC_ROOT.'/images/logoconocer.png" width="150px" >
                            </td>
                            <td style="text-align:left;padding-left:25px;">
                                <img src="'.DOC_ROOT.'/images/logo_correo.jpg" width="150px" >
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2 style="text-align:center; ">
                                <strong>Cédula de Evaluación</strong>
                            </td>
                        </tr>
                    </table>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Evaluador:</strong></td>
                            <td>'.$info['evaluador'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Clave de la ECE:</strong></td>
                            <td>ECE213-15 Instituto de Administración Pública del Estado de Chiapas</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Candidato:</strong></td>
                            <td>'.$info['candidato'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Estándar de Competencia:</strong></td>
                            <td>'.$info['estandar'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Fecha:</strong></td>
                            <td>'.$info['fecha'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="2"><strong>RESULTADO DE LA EVALUACIÓN</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Mejores prácticas:</strong></td>
                            <td>'.$info['mejores_practicas'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Áreas de Oportunidad:</strong></td>
                            <td>'.$info['areas_oportunidad'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Criterios de Evaluación que no se cubrieron:</strong></td>
                            <td>'.$info['criterios_no_cumplidos'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Recomendaciones:</strong></td>
                            <td>'.$info['recomendaciones'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray"><strong>JUICIO DE EVALUACIÓN</strong></td>
                        </tr>
                        <tr>
                            <td>'.$info['juicio_evaluacion'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;">
                        <tr>
                            <td style="text-align:center;padding-right:35px;width:50%;" class="bg-gray">
                                <strong>Evaluador</strong>
                            </td>
                            <td style="text-align:center;padding-left:35px;width:50%;" class="bg-gray">
                                <strong>Candidato</strong>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><small>Estoy de acuerdo con el juicio de evaluación y satisfecho con los comentarios emitidos.</small></td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;">
                        <tr>
                            <td style="padding-left:35px;width:50%;text-align:center;font-size:12px;">
                                '.$info['evaluador'].'
                            </td>
                            <td style="padding-left:35px;width:50%;text-align:center;font-size:14px;">
                                '.$info['firma'].'<br>
                                '.$info['candidato'].'
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <strong>Nombre y Firma</strong>
                            </td>
                            <td style="text-align:center;">
                                <strong>Nombre y Firma</strong>
                            </td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;">
                        <tr class="bg-gray">
                            <td style="text-align:center;width:10%;">
                                <strong>Nota:</strong>
                            </td>
                            <td style="text-align:left;width:90%;">
                                <ul>
                                    <li>EL Juicio de Evaluación emitido, está sujeto a la ratificación o rectificación del Dictamen emitido por (Nombre de la ECE u OC).</li>
                                    <li>El Candidato pagará el importe establecido para el certificado, sí y solo si su Juicio de Competencia resultara ser competente.</li>
                                </ul>
                            </td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:right;" class="bg-gray">
                                <strong>Observaciones:</strong>
                            </td>
                            <td>'.$info['observaciones'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '  </body>
            </html>';
	// echo $html;
	// exit;
	# Instanciamos un objeto de la clase DOMPDF.
	$mipdf = new DOMPDF();
	 
	# Definimos el tamaño y orientación del papel que queremos.
	# O por defecto cogerá el que está en el fichero de configuración.
	$mipdf->setPaper("A4", "portrait");
	 
	# Cargamos el contenido HTML.
	$mipdf->loadHtml($html);
	 
	# Renderizamos el documento PDF.
	$mipdf->render();
	 
	# Enviamos el fichero PDF al navegador.
	$mipdf->stream('cedula.pdf',array('Attachment' => 0));
			


?>