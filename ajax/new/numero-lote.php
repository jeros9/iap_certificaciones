<?php
session_start();
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');
$subjectId = $_POST['subjectId'];
$courseId = $_POST['courseId'];
$studentId = $_POST['id']; 
$lot_number = $_POST['lot_number'];
$lot = $course->getLotNumber($subjectId,$courseId,$studentId);
if(isset($lot['lot'])){
    $course->editLotNumber($subjectId, $courseId, $studentId, $lot_number);
}else{
    $course->addLotNumber($subjectId, $courseId, $studentId, $lot_number);    
}
echo json_encode(array(
    "message"       =>"Número de lote guardado",
    "growl"         =>true,
    "type"          =>"success",
    "modal_close"   =>true,
    "selector"      =>"#student_$studentId",
    "html"          =>$lot_number
));
?>