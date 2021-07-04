<?php
	if($_SESSION["User"]["type"] == "student")
        exit;

        /* echo "<pre>";
        print_r($_POST); 
        exit; */
	if($_POST)
	{
        $course->setCourseId($_POST['courseId']);
        $infoCourse = $course->Info();
        $courseDays = $infoCourse['courseDays'];
        for($i = 1; $i <= $courseDays; $i++)
        {
            $asistencia = $_POST['asistencia' . $i];

            foreach($asistencia['Entrada'] as $key => $value)
            {
                $course_attendance->setUserId($key);
                $course_attendance->setCourseId($_POST['courseId']);
                $course_attendance->setPersonalId($_SESSION['User']['userId']);
                $course_attendance->setAttendanceDay($value);
                $course_attendance->setTypeAttendance('Entrada');
                $course_attendance->Save();
            }

            foreach($asistencia['Salida'] as $key => $value)
            {
                $course_attendance->setUserId($key);
                $course_attendance->setCourseId($_POST['courseId']);
                $course_attendance->setPersonalId($_SESSION['User']['userId']);
                $course_attendance->setAttendanceDay($value);
                $course_attendance->setTypeAttendance('Salida');
                $course_attendance->Save();
            }
        }
        /* echo "<pre>";
        print_r($_POST); 
        exit; */
        //if($_POST["auxTpl"] == "admin"){
			header("Location:" . WEB_ROOT . "/edit-modules-group/id/" . $_POST["courseId"] . "");
			exit;
		//}
    }
    
    $course->setCourseId($_GET['id']);
    $infoCourse = $course->Info();
    $days[0] = $infoCourse['initialDate'];
    for($i = 1; $i < intval($infoCourse['courseDays']); $i++)
    {
        $date = date("Y-m-d", strtotime($days[$i - 1] . " + 1 days"));
        $days[$i] = $date;
    }
    /* echo "<pre>";
    print_r($days); exit; */
    $smarty->assign('course', $infoCourse);
    $smarty->assign('days', $days);
    $group->setCourseId($_GET['id']);
    $theGroup = $group->DefaultGroupAttendanceCapacitador($_SESSION["User"]["userId"]);
    $smarty->assign('theGroup', $theGroup);
    $smarty->assign('student', $student);
    $smarty->assign('personalId', $_SESSION["User"]["userId"]);
    $smarty->assign('n', 1);
    //echo "<pre>";
    //print_r($theGroup); exit;
?>