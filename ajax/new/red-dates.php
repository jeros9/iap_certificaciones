<?php
session_start();
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');
try {
    $plan = $_POST['plan'];
    $evaluation = $_POST['evaluation'];
    $iec = $_POST['iec'];
    $courseId = $_POST['course'];
    $subjectId = $_POST['subject'];
    $lotes = $_POST['lote'];
    $exist = 0;
    foreach ($plan as $key => $value) {
        $plan_date = "NULL";
        $evaluation_date = "NULL";
        $iec_date = "NULL";
        if (!empty($value)) {
            $plan_date = $util->FormatDate(strtotime($value));
            $plan_date = "'$plan_date'";
        }
        if (!empty($evaluation[$key])) {
            $evaluation_date = $util->FormatDate(strtotime($evaluation[$key]));
            $evaluation_date = "'$evaluation_date'";
        }
        if (!empty($iec[$key])) { 
            $iec_date = $util->FormatDate(strtotime($iec[$key]));
            $iec_date = "'$iec_date'";
        }
        $exist = $course->existRedDates($subjectId, $courseId, $key);
        if ($exist) {
            $course->editRedDates($subjectId, $courseId, $key, $plan_date, $evaluation_date, $iec_date);
        }else{
            $course->addRedDates($subjectId, $courseId, $key, $plan_date, $evaluation_date, $iec_date);
        } 
        
        if(!empty($lotes[$key])){
            $lot = $course->getLotNumber($subjectId,$courseId,$key);
            if($lot > 0){
                $course->editLotNumber($subjectId, $courseId, $key, $lotes[$key]);
            }else{
                $course->addLotNumber($subjectId, $courseId, $key, $lotes[$key]);    
            }
        }
    }
    echo json_encode(array(
        "message"       =>"Fechas guardadas",
        "growl"         =>true,
        "type"          =>"success",
        "modal_close"   =>true
    ));
} catch (\Throwable $th) {
    echo json_encode(array(
        "message"=>$th->getMessage()
    ));
}
?>