<?php
session_start();
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');
$subjectId = $_POST['subjectId'];
$courseId = $_POST['courseId'];
$lot_number = $_POST['lot_number'];
$selector = "";
if($_POST['tipo'] == "general"){
    $studentId = $course->EnumerateAlumn($courseId, "activo"); 
    $course->editLotNumberCourse($subjectId, $courseId, $lot_number); 
}else{
    $studentId[] = ["alumnoId" => $_POST['id']]; 
}
// print_r($studentId);
foreach ($studentId as $item) {
    $lot = $course->getLotNumber($subjectId,$courseId,$item['alumnoId']);
    $selector = "#student_{$item['alumnoId']}";
    if($lot > 0){
        $course->editLotNumber($subjectId, $courseId, $item['alumnoId'], $lot_number);
    }else{
        $course->addLotNumber($subjectId, $courseId, $item['alumnoId'], $lot_number);    
    }
}

echo json_encode(array(
    "message"       =>"Número de lote guardado",
    "growl"         =>true,
    "type"          =>"success",
    "modal_close"   =>true,
    "selector"      =>$selector,
    "html"          =>$lot_number
));
?>