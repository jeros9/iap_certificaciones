<?php
include_once('../initPdf.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

session_start();

if(isset($_SESSION["User"]))
{
    if($_SESSION["User"]["type"] == "student")
    {
        if($_SESSION["User"]["userId"]<>$_GET['id'])
            exit;
        
    }
}
else
    exit;

$student->setUserId($_GET['id']);
$info = $student->GetInfo();
	
$firma = $student->extraeFirma($info["userId"],1,'course',$_GET['courseId']); 
if(isset($_GET['courseId']))
	$infoCertificacion = $student->infoCertificacion($_GET["courseId"]);
    

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
    <title>Carta de Autorización Firma Digital</title>
    <style type='text/css'>
        body {
            font-family: sans-serif;
            font-size: 11pt;
        }
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
            margin-top: 2.5cm;
            margin-bottom: 2.5cm;
            margin-left: 3cm;
            margin-right: 3cm;
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
            <td style="text-align:left;padding-left:25px;">
                <img src="' . DOC_ROOT . '/images/logo_correo.jpg" width="150px" >
            </td>
            <td style="text-align:right;padding-right:25px;">
                <img src="' . DOC_ROOT . '/images/logoconocer.png" width="150px" >
            </td>
        </tr>
        <tr>
            <td colspan=2 style="text-align:center; font-size: 14pt;">
                <strong>Carta de Autorización Firma Digital</strong>
            </td>
        </tr>
    </table>';
$html .= '<p>
            Yo, con número de CURP <b>' . $info['curp'] . '</b>, en pleno uso de mis facultades legales e intelectuales, por este medio doy mi autorización a que se uttilice mi firma digital en documentos que serán de uso del proceso de evaluación del estándar de competencia laboral <b>' . $infoCertificacion['certificacion'] . '</b> del sistema Red CONOCER del Instituto de Administración Pública del Estado de Chiapas, A.C.
        </p>
        <p>Los documentos que autorizo, para el uso de firma digital son los siguientes:</p>
        <ul>
            <li>Ficha de registro</li>
            <li>Cédula de evaluación</li>
            <li>Plan de evaluación</li>
            <li>Acuse del recibo del documento derechos y obligaciones del usuario SNC</li>
            <li>Evaluación diagnóstica</li>
            <li>Encuesta de satisfacción</li>
            <li>Acuse de recibo del certificado</li>
        </ul>
        <p>De existir un cambio en las versiones de la documentación se debe realizar una nueva autorización, por lo cual este documento quedarías sin efecto.</p>
        <br><br><br><br><br><br><br>
        <p style="text-align: center;"><b>
            ' . $info['firma'] . '<br>
            ' . $info['names'] . ' ' . $info['lastNamePaterno'] . ' ' . $info['lastNameMaterno'] . '<br>
            Firma del Candidato
        </b></p>';
$html .= '  </body>
</html>';

	$mipdf = new DOMPDF();
	$mipdf ->set_paper("A4", "portrait");
	$mipdf ->load_html($html);
	$mipdf ->render();
	$mipdf ->stream('acuse.pdf',array('Attachment' => 0));
?>