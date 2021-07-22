<?php

include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

switch($_POST["type"])
{
    case "orderInfo":
        $invitation->setInvitationId($_POST['id']);
        $orderInfo = $invitation->OrderInfo();
        $smarty->assign('orderInfo', $orderInfo);
        $smarty->display(DOC_ROOT.'/templates/forms/new/info-order.tpl');
        break;
}
?>