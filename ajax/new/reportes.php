<?php
include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT . '/libraries.php');
session_start();
if ($_GET['option']) {
    $_POST['option'] = $_GET['option'];
}
switch ($_POST["option"]) {
    case 'prospects':
        $prospects = $user->getProspect();
        include DOC_ROOT."/ajax/new/reportes/prospectos.php";
        break;
}
