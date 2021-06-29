<?php

include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

switch($_POST["type"])
{
    case "addInvitation":
        $periods = $period->Enumerate();
        $smarty->assign("periods", $periods);
        $student->setState(7);	
        $municipios = $student->EnumerateCiudades();
        $smarty->assign('municipios', $municipios);
        $smarty->assign("DOC_ROOT", DOC_ROOT);
        $smarty->display(DOC_ROOT.'/templates/forms/new/add-invitation.tpl');
        break;

    case "saveAddInvitation":
        $invitation->setPeriodId($_POST['period']);
        $invitation->setMunicipalityId($_POST['municipality']);
        $invitation->setPresidentName($_POST['presidentName']);
        $invitation->setPoliticalGroup($_POST['politicalGroup']);
        $invitation->setAgreement($_POST['agreement']);

        if(!$invitation->Save())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT . '/templates/boxes/status.tpl');
            echo "[#]";
            $invitations = $invitation->Enumerate();
            $invitations = $util->EncodeResult($invitations);
            $smarty->assign("invitations", $invitations);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT . '/templates/lists/invitacion.tpl');
        }
        break;

    case "receiveInvitation":
        $smarty->assign("DOC_ROOT", DOC_ROOT);
        $invitation->setInvitationId($_POST['id']);
        $invitationInfo = $invitation->Info();
        $invitationInfo = $util->EncodeRow($invitationInfo);
        $smarty->assign("invitation", $invitationInfo);
        $smarty->display(DOC_ROOT.'/templates/forms/new/receive-invitation.tpl');
        break;

    case "saveReceiveInvitation":
        $invitation->setInvitationId($_POST['invitationId']);
        $invitation->setReceiverName($_POST['receiverName']);
        $invitation->setReceiverCharge($_POST['receiverCharge']);
        $invitation->setReceiverPhone($_POST['receiverPhone']);
        $invitation->setReceiverEmail($_POST['receiverEmail']);
        if(!$invitation->Receive())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
            $invitations = $invitation->Enumerate();
            $invitations = $util->EncodeResult($invitations);
            $smarty->assign("invitations", $invitations);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT . '/templates/lists/invitacion.tpl');
        }
        break;

    case "confirmInvitation":
        $smarty->assign("DOC_ROOT", DOC_ROOT);
        $invitation->setInvitationId($_POST['id']);
        $invitationInfo = $invitation->Info();
        $invitationInfo = $util->EncodeRow($invitationInfo);
        $smarty->assign("invitation", $invitationInfo);
        $smarty->display(DOC_ROOT.'/templates/forms/new/confirm-invitation.tpl');
        break;

    case "saveConfirmInvitation":
        $invitation->setInvitationId($_POST['invitationId']);
        $invitation->setConfirmedName($_POST['confirmedName']);
        $invitation->setConfirmedPhone($_POST['confirmedPhone']);
        $invitation->setConfirmedEmail($_POST['confirmedEmail']);
        if(!$invitation->Confirm())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
            $invitations = $invitation->Enumerate();
            $invitations = $util->EncodeResult($invitations);
            $smarty->assign("invitations", $invitations);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT . '/templates/lists/invitacion.tpl');
        }
        break;

    case "editInvitation":
        $periods = $period->Enumerate();
        $smarty->assign("periods", $periods);
        $student->setState(7);	
        $municipios = $student->EnumerateCiudades();
        $smarty->assign('municipios', $municipios);
        $invitation->setInvitationId($_POST['id']);
        $invitationInfo = $invitation->Info();
        $smarty->assign('invitation', $invitationInfo);
        $smarty->display(DOC_ROOT.'/templates/forms/new/edit-invitation.tpl');
        break;

    case "saveEditInvitation":
        $invitation->setInvitationId($_POST['invitationId']);
        $invitation->setPeriodId($_POST['period']);
        $invitation->setMunicipalityId($_POST['municipality']);
        $invitation->setPresidentName($_POST['presidentName']);
        $invitation->setPoliticalGroup($_POST['politicalGroup']);
        $invitation->setAgreement($_POST['agreement']);
        if(!$invitation->Edit())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
            $invitations = $invitation->Enumerate();
            $invitations = $util->EncodeResult($invitations);
            $smarty->assign("invitations", $invitations);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT . '/templates/lists/invitacion.tpl');
        }
        break;

    case "infoInvitation":
        $invitation->setInvitationId($_POST['id']);
        $invitationInfo = $invitation->Info();
        $smarty->assign('invitation', $invitationInfo);
        $smarty->display(DOC_ROOT.'/templates/forms/new/info-invitation.tpl');
        break;
}
?>