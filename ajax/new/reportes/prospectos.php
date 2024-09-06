<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

$spreadsheet = new Spreadsheet();
$spreadsheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(30);
// Set document properties
$spreadsheet->getProperties()->setCreator('William Ramírez')
    ->setLastModifiedBy('William Ramírez')
    ->setTitle('Reporte de Prospectos')
    ->setSubject('Candidatos')
    ->setDescription('Reporte de cuántos prospectos están inscritos')
    ->setKeywords('Candidatos')
    ->setCategory('Reportes');
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nombre');
$sheet->setCellValue('C1', 'Apellido Paterno');
$sheet->setCellValue('D1', 'Apellido Materno');
$sheet->setCellValue('E1', 'Correo');
$sheet->setCellValue('F1', 'Teléfono');
$sheet->setCellValue('G1', 'Ayuntamiento');
$sheet->setCellValue('H1', 'Encargo'); 
$sheet->getStyle('A')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('A')->getFont()->setSize(14)->setBold(true);
$sheet->getStyle('B')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('B')->getFont()->setSize(14)->setBold(true);
$sheet->getStyle('C')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('C')->getFont()->setSize(14)->setBold(true);
$sheet->getStyle('D')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('D')->getFont()->setSize(14)->setBold(true);
$sheet->getStyle('E')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('E')->getFont()->setSize(14)->setBold(true);
$sheet->getStyle('F')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('F')->getFont()->setSize(14)->setBold(true);
$sheet->getStyle('G')->getAlignment()->setHorizontal('center')->setVertical('center');
$sheet->getStyle('G')->getFont()->setSize(14)->setBold(true); 
$row = 2;
foreach ($prospects as $item) {
    $encargo = mb_convert_encoding($item['encargo'], "UTF-8", "ISO-8859-1");
    $sheet->setCellValue("A{$row}", $item['id']);
    $sheet->setCellValue("B{$row}", $item['name']);
    $sheet->setCellValue("C{$row}", $item['firstSurname']);
    $sheet->setCellValue("D{$row}", $item['secondSurname']);
    $sheet->setCellValue("E{$row}", $item['email']);
    $sheet->setCellValue("F{$row}", $item['phone']);
    $sheet->setCellValue("G{$row}", $item['municipio']); 
    $sheet->setCellValue("H{$row}", $encargo); 
    $row++;
}


$fileName = bin2hex(random_bytes(4));
// Redirect output to a client’s web browser (Xls)
header('Content-Type: application/vnd.ms-excel; charset=utf-8');
header('Content-Disposition: attachment;filename="prospectos' . $fileName . '.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('php://output');
