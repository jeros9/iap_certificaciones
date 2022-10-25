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
    $exist = 0;
    foreach ($plan as $key => $value) {
        $plan_date = $util->FormatDate(strtotime($value));
        $evaluation_date = $util->FormatDate(strtotime($evaluation[$key]));
        $iec_date = $util->FormatDate(strtotime($iec[$key]));
        $exist = $course->existRedDates($subjectId, $courseId, $key);
        if ($exist) {
            $course->editRedDates($subjectId, $courseId, $key, $plan_date, $evaluation_date, $iec_date);
        }else{
            $course->addRedDates($subjectId, $courseId, $key, $plan_date, $evaluation_date, $iec_date);
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