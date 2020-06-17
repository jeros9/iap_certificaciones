<?php
if($_SESSION["User"]["type"] == "student")
    exit;
	
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

$group_activity->setCourseId($_GET["id"]);
$actividades = $group_activity->Enumerate();

$totalActividades = 0;
foreach($actividades as $value)
    if($value["score"] > 0)
        $totalActividades++;

$totalPonderation = $group_activity->TotalPonderation();

$group->setCourseId($_GET['id']);
$theGroup = $group->DefaultGroupCapacitador();
$titulos = "";

for($i = 1; $i <= $totalActividades; $i++)
    $titulos .= "Cal. " . $i . "\t";
$titulos = "Usuario\tNombre\t" . $titulos . "Acumulado\t";

echo $titulos . "\n";
foreach($theGroup as $item)
{
    $registro = $item['controlNumber'] . "\t" . mb_strtoupper($item['lastNamePaterno']) . ' ' . mb_strtoupper($item['lastNameMaterno']) . ' ' . mb_strtoupper($item['names']) . "\t";
    for($i = 1; $i <= $totalActividades; $i++)
    {
        if($item['score'][$i - 1] > 0)
            $registro .= $item['score'][$i - 1] . "/" . $item['realScore'][$i - 1] . "%\t";
        else
            $registro .= "NA\t";
    }
    $registro .= mb_strtoupper($item['addepUp']) . "%";
    echo $registro . "\n";
}
header("Content-Type:application/vnd.ms-excel; charset=UTF-8");	
header("content-disposition: attachment; filename=calificaciones" . $_GET["id"] . "_" . date('d_m_Y') . ".xls");	
header("Pragma: no-cache"); 
header("Expires: 0");