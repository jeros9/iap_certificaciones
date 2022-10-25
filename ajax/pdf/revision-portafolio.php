<?php
include_once('../../initPdf.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

session_start();
$list = $course->getBriefcase();
$students = $_POST['student'];
$html = "";
$html .= "
    <html>
        <head>
            <title>REVISIÓN DE PORTAFOLIO</title>
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
                table thead td{
                    font-weight:800;
                }
            </style>
        </head>
        <body>";
$html .= '  <table style="width:100%;margin-bottom:20px;">
                <tr>
                    <td style="text-align:center;width:33%;">
                        <img src="'.DOC_ROOT.'/images/logoconocer.png" width="150px" >
                    </td>
                    <td style="text-align:center;width:33%;">
                        <strong>Revisión de Portafolios</strong>
                    </td>
                    <td style="text-align:center;width:33%;">
                        <img src="' . DOC_ROOT . '/images/logo_correo.jpg" width="150px" >
                    </td>
                </tr>
            </table>';
$html.="    <table style='width:100%; text-align:center;' class='tb-border'>
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Grupo</td>
                        <td></td>
                        <td style='width:80px'>Fecha Plan</td>
                        <td style='width:80px;'>Fecha Evaluación</td>
                        <td style='width:80px;'>Fecha IEC</td>
                        <td>Ficha</td>
                        <td>Plan de Evaluación</td>
                        <td>Cédula</td>
                        <td>IEC</td>
                        <td>Productos</td>
                    </tr>
                </thead>
                <tbody>";
foreach ($list as $item) {
    if (isset($students[$item['courseId']][$item['alumnoId']])) {
            $arrayIconos = [];
            $item['fecha'] = $util->FormatDateDMY($item['fecha']);
            $item['fecha_desarrollo'] = $util->FormatDateDMY($item['fecha_desarrollo']);
            $item['plan_date'] = isset($item['plan_date']) ? $util->FormatDateDMY($item['plan_date']) : "";
            $item['evaluation_date'] = isset($item['evaluation_date']) ? $util->FormatDateDMY($item['evaluation_date']) : "";
            $item['iec_date'] = isset($item['iec_date']) ? $util->FormatDateDMY($item['iec_date']) : "";
            $error='<img src="'.DOC_ROOT.'/images/icons/cancelar.png">';
            $success="<img src='".DOC_ROOT.'/images/icons/comprobado.png'."'>";
            $arrayIconos['fecha_plan'] = !empty($item['fecha']) && $item['fecha'] == $item['plan_date'] ? $success: $error;
            $arrayIconos['fecha_evaluacion'] = !empty($item['fecha_desarrollo']) && $item['fecha_desarrollo'] == $item['evaluation_date'] ? $success: $error;
            $arrayIconos['fecha_iec'] = !empty($item['iec_date']) ? $success : $error;
            $arrayIconos['ficha'] =  $item['actualizado'] == 'si' ? $success : $error;
            $arrayIconos['plan'] =  $item['hasPlan'] == 'no' ? $error : $success;
            $arrayIconos['cedula'] =  $item['hasCedula'] == 'no' ? $error : $success;
            $arrayIconos['iec'] =  $item['hasIec'] == 'no' ? $error : $success;
            $arrayIconos['productos'] =  $item['hasProducts'] == 'no' ? $error : $success;
            $html.="<tr>
                        <td>{$item['names']}<br>{$item['lastNamePaterno']}<br>{$item['lastNameMaterno']}</td>
                        <td>{$item['group']}</td>
                        <td>
                            <table style='padding:0;margin:0; border:none;'>
                                <tr>
                                    <td style='border:none;'>RC</td>
                                </tr>
                                <tr>
                                    <td style='border:none;'>IAP</td>
                                </tr>
                                <tr>
                                    <td style='height: 5px;border:none;'></td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <div class='text-center'>
                                <div>{$item['plan_date']}</div>
                                <div>{$item['fecha']}</div>
                                <div>{$arrayIconos['fecha_plan']}</div>
                            </div>
                        </td>
                        <td>
                            <div>{$item['evaluation_date']}</div>
                            <div>{$item['fecha_desarrollo']}</div>
                            <div>{$arrayIconos['fecha_evaluacion']}</div>
                        </td>
                        <td>
                            <div>{$item['iec_date']}</div>
                            <div>{$arrayIconos['fecha_iec']}</div>
                        </td>
                        <td>
                            {$arrayIconos['ficha']}
                        </td>
                        <td>
                            {$arrayIconos['plan']}
                        </td>
                        <td>
                            {$arrayIconos['cedula']}
                        </td>
                        <td>
                            {$arrayIconos['iec']}
                        </td>
                        <td>
                            {$arrayIconos['productos']}
                        </td>
                    </tr>";
    }
}
$html.="         </tbody>
            </table>
        </body>
    </html>";
$mipdf = new DOMPDF();
$mipdf->setPaper("Letter", "portrait");
$mipdf->loadHtml($html);
$mipdf->render();
$mipdf->stream('revision-portafolio.pdf',array('Attachment' =>0));