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
	if($_SESSION["User"]["type"] != "Administrador" && $_SESSION['User']['type'] != ""){
		exit;
	}
	$dictum->setDictumId($_GET['id']);
    $info = $dictum->GetInfo();
    
    $subjects_p1 = '';
    $subjects_p2 = '';
    $subject->setPersonalId($info['personalId_1']);
    $sp1 = $subject->EnumerateByPersonal();
    $subject->setPersonalId($info['personalId_2']);
    $sp2 = $subject->EnumerateByPersonal();

    foreach($sp1 as $item)
    {
        $subjects_p1 .= $item['cve'] . ', ';
    }

    foreach($sp2 as $item)
    {
        $subjects_p2 .= $item['cve'] . ', ';
    }
	
    //$firma = $student->extraeFirma($info["userId"],1,'course',$_GET['courseId']);
	// echo "<pre>"; print_r($firma);
    // exit;
    $footer = '';

	$html .= "
            <html>
                <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
                    <title>Dictamen</title>
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
                                <img src="' . DOC_ROOT . '/images/logoconocer.png" width="150px" >
                            </td>
                            <td style="text-align:center;width:33%;">
                                <strong>Dictamen</strong>
                            </td>
                            <td style="text-align:center;width:33%;">
                                <img src="' . DOC_ROOT . '/images/logo_correo.jpg" width="150px" >
                            </td>
                        </tr>
                    </table>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>ECE/OC:</strong></td>
                            <td>ECE213-15 Instituto de Administración Pública del Estado de Chiapas</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Fecha:</strong></td>
                            <td>'.$info['date'].'</td>
                        </tr>
                        <tr>
                            <td style="text-align:right;" class="bg-gray"><strong>Estándar de Competencia:</strong></td>
                            <td>'.$info['name'].'</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td class="bg-gray" style="text-align:center;"><strong>Folio</strong></td>
                            <td class="bg-gray" style="text-align:center;"><strong>Lote</strong></td>
                            <td class="bg-gray" style="text-align:center;"><strong>Muestra</strong></td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">' . $info['folio'] . '</td>
                            <td style="text-align:center;">' . $info['lot'] . '</td>
                            <td style="text-align:center;">' . $info['sample'] . '</td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray" colspan="2">
                                <strong>Grupo de Dictamen</strong>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;" class="bg-gray"><strong>Integrantes</strong></td>
                            <td style="text-align:center;" class="bg-gray"><strong>Firma</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <br><br><br>
                                <strong>* ' . $info['director'] . '</strong><br>
                                <small>Responsable de la ECE</small>
                                <br><br><h3>INVITADOS</h3><br><br>
                                <strong>* ' . $info['personal1'] . ', </strong><br> Evaluador Independiente ' . $subjects_p1 . '
                                <br><br><br><br><br><br>
                                <strong>* ' . $info['personal2'] . ', </strong><br> Evaluador Independiente ' . $subjects_p2 . '
                                <br><br><br><br><br><br>
                            </td>
                            <td style="text-align:center;">
                                <br><br><br><br><br>
                                <small>' . $info['director'] . '</small><br>
                                <small>' . $info['firma'] . '</small><br>
                                <br><br><br><br>
                                <small>' . $info['personal1'] . '</small><br>
                                <small>' . $info['firma1'] . '</small><br>
                                <br><br><br><br>
                                <small>' . $info['personal2'] . '</small><br>
                                <small>' . $info['firma2'] . '</small><br>
                                <br><br><br><br><br><br>
                            </td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray"><strong>Informe</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>Reglas de Operación</strong></p>
                                <ul>
                                    <li>
                                        Revisar cada portafolio y cada apartado de los portafolios señalados en el sistema.
                                    </li>
                                    <li>
                                        Señalar las observaciones pertinentes a cada portafolio revisado.
                                    </li>
                                </ul>
                                ' . $info['content'] . '
                            </td>
                        </tr>
                    </table><br><br>';
    $html .= '      <table style="width:100%;" class="tb-border cell-padding">
                        <tr>
                            <td style="text-align:center;" class="bg-gray"><strong>Fallo</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <ul><li>' . $info['result'] . '</li></ul>
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