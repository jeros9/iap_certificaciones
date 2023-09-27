<?php
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT . '/libraries.php');
session_start();
if ($_POST) {
    switch ($_POST['opcion']) {
        case 'externo':
            $fecha_inicio = empty($_POST['fecha_inicio']) ? "1970-01-01" : $_POST['fecha_inicio'];
            $fecha_fin = empty($_POST['fecha_fin']) ? date('Y-m-d') : $_POST['fecha_fin'];
            $resultado = intval($_POST['resultado']);
            $where = "AND red_dates.plan_date >= '$fecha_inicio' AND red_dates.plan_date <='$fecha_fin'";
            if ($resultado != 0) {
                switch ($resultado) {
                    case 1:
                        $where .= " AND user_subject.aprobado = 'si'";
                        break;
                    case 2:
                        $where .= " AND user_subject.aprobado = 'no'";
                        break;
                    default:
                        $where .= " AND user_subject.aprobado = 's/n'";
                        break;
                }
            }
            $list = $course->getBriefcase($_POST["certificaciones"], $_POST['evaluator'], NULL, $where);
            $smarty->assign("list", $list);
            $smarty->assign("evaluator", $_POST['evaluator']);
            $smarty->assign("certification", $_POST["certificaciones"]);
            echo json_encode(array(
                "selector"  => "#contenido",
                "html"      => $smarty->fetch(DOC_ROOT . '/templates/lists/new/revision-externo.tpl')
            ));
            break;

        default:
            $list = $course->getBriefcase($_POST["certificaciones"], $_POST['evaluator'], $_POST["grupos"]);
            $smarty->assign("list", $list);
            $smarty->assign("evaluator", $_POST['evaluator']);
            $smarty->assign("certification", $_POST["certificaciones"]);
            $smarty->assign("group", $_POST["grupos"]);
            echo json_encode(array(
                "selector"  => "#contenido",
                "html"      => $smarty->fetch(DOC_ROOT . '/templates/lists/new/revision-portafolio.tpl')
            ));
            break;
    }
}
