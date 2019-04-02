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
	$planes->setPlanId($_GET['id']);
	$info = $planes->GetInfo();
	
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
    $tb_requerimientos = '';
    $requerimientos = $planes->GetInfoRequerimientos();
    foreach($requerimientos as $item)
    {
        $tb_requerimientos .= '<tr>
                                    <td style="text-align:center;">'.$item['cantidad'].'</td>
                                    <td>'.$item['requerimiento'].'</td>
                                </tr>';
    }
	$html .= "
            <html>
                <head>
                    <title>PLAN DE EVALUACIÓN</title>
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
                            <td style="text-align:center;width:33%;">
                                <img src="'.DOC_ROOT.'/images/logoconocer.png" width="150px" >
                            </td>
                            <td style="text-align:center;width:33%;">
                                <strong>Plan de Evaluación</strong>
                            </td>
                            <td style="text-align:center;width:33%;">
                                <img src="'.DOC_ROOT.'/images/logo_correo.jpg" width="150px" >
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
                            <td colspan="5" class="bg-gray" style="text-align:center;"><strong>Resultados del Diágnostico</strong></td>
                        </tr>
                        <tr>
                            <td class="bg-gray" style="width:70%;"><strong>Se sugirió capacitación:</strong></td>
                            <td class="bg-gray" style="width:10%;text-align:center;"><strong>Si</strong></td>
                            <td style="width:5%;text-align:center;">'.($info['capacitacion'] == 1 ? 'X' : '').'</td>
                            <td class="bg-gray" style="width:10%;text-align:center;"><strong>No</strong></td>
                            <td style="width:5%;text-align:center;">'.($info['capacitacion'] == 0 ? 'X' : '').'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="2"><strong>Requerimientos para el desarrollo de la Evaluación</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:center;width:8%;" class="bg-gray"><strong>Cantidad</strong></td>
                            <td style="text-align:center;width:92%;" class="bg-gray"><strong>Requerimiento</strong></td>
                        </tr>
                        '.$tb_requerimientos.'
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="2"><strong>Criterios para obtener juicio de competente</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;width:15%;" class="bg-gray"><strong>Primer criterio:</strong></td>
                            <td style="width:75%;">La suma total del peso relativo a los reactivos del IEC que se aplique sea igual o mayor a: <strong>00.00 (depende del estándar)</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;width:18%;" class="bg-gray"><strong>Segundo criterio:</strong></td>
                            <td style="width:72%;">Existe al menos un reactivo cumplido para cada criterio de evaluación, aplica para reactivos de producto, desempeño, actitud/habito/valor</strong></td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="3"><strong>Acuerdo para el desarrollo de la Evaluación</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:center;width:60%;" class="bg-gray"><strong>Lugar</strong></td>
                            <td style="text-align:center;width:20%;" class="bg-gray"><strong>Fecha</strong></td>
                            <td style="text-align:center;width:20%;" class="bg-gray"><strong>Horario</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">'.$info['lugar_desarrollo'].'</td>
                            <td style="text-align:center;">'.$info['fecha_desarrollo'].'</td>
                            <td style="text-align:center;">'.$info['horario_desarrollo'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="3"><strong>Acuerdo para la presentación de los resultados de la evaluación</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:center;width:60%;" class="bg-gray"><strong>Lugar</strong></td>
                            <td style="text-align:center;width:20%;" class="bg-gray"><strong>Fecha</strong></td>
                            <td style="text-align:center;width:20%;" class="bg-gray"><strong>Horario</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">'.$info['lugar_resultados'].'</td>
                            <td style="text-align:center;">'.$info['fecha_resultados'].'</td>
                            <td style="text-align:center;">'.$info['horario_resultados'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%">
                        <tr>
                            <td>
                                Se proporcionó al Candidato información suficiente y detallada respecto a:
                                <ul>
                                    <li>Los desempeños, productos conocimientos a demostrar durante la evaluación, así como los lugares, fechas y horarios en que se realizará.</li>
                                    <li>Los derechos y obligaciones de los usuarios del Sistema Nacional de Competencias.</li>
                                    <li>El lugar y fecha para la entrega del Certificado.</li>
                                    <li>Los mecanismos de operación y registro de resultados de evaluación en el Sistema Integral de Información (SII).</li>
                                </ul>
                            </td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;width:10%;" class="bg-gray">
                                <strong>Nota:</strong>
                            </td>
                            <td style="text-align:left;width:90%;">
                                En caso de no concluir el proceso de evaluación en los tiempos establecidos en el Plan de Evaluación, Usted contará con un plazo de máximo de 25 días hábiles a partir de la fecha de la firma de conformidad de este Plan, de lo contrario reiniciará el proceso de evaluación, cubriendo los costos respectivos.<br>
                                El Certificado de Competencia será pagado previo al trámite del mismo, si y solo si, después de la evaluación y la emisión del juicio resulta Competente.
                            </td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;">
                        <tr>
                            <td style="padding-left:35px;width:50%;text-align:center;font-size:12px;">
                                '.$info['firma_personal'].'<br>
                                '.$info['evaluador'].'
                            </td>
                            <td style="padding-left:35px;width:50%;text-align:center;font-size:14px;">
                                '.$info['firma'].'<br>
                                '.$info['candidato'].'
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <strong>Nombre y Firma del Evaluador</strong>
                            </td>
                            <td style="text-align:center;">
                                <strong>Nombre y Firma del Candidato</strong>
                            </td>
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