<?php

include_once('../../init.php');
include_once('../../config.php');
include_once(DOC_ROOT.'/libraries.php');

switch($_POST["type"])
{
    case "addDictum":

        $subjects = $subject->EnumerateCertificacion();

        $smarty->assign('subjects', $subjects);
        $smarty->assign("DOC_ROOT", DOC_ROOT);
        $smarty->display(DOC_ROOT.'/templates/forms/new/add-dictum.tpl');

        break;

    case "saveAddDictum":

        $dictum->setResult($_POST['fallo']);
        $dictum->setSubjectId($_POST['estandar']);
        $dictum->setFolio($_POST['folio']);
        $dictum->setLot($_POST['lote']);
        $dictum->setSample($_POST['muestra']);
        $dictum->setPersonalId1($_POST['integrante1']);
        $dictum->setPersonalId2($_POST['integrante2']);
        $dictum->setContent($_POST['informe']);
        $dictum->setDate($_POST['fecha']);
        $dictum->setActive(1);

        if(!$dictum->Save())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
            $result = $dictum->Enumerate();
            $dictums = $util->EncodeResult($result);
            $smarty->assign("dictums", $dictums);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT.'/templates/lists/dictum.tpl');
        }

        break;

    case 'deleteDictum':

        $dictum->setDictumId($_POST['id']);

        if(!$dictum->Delete())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
            $result = $dictum->Enumerate();
            $dictums = $util->EncodeResult($result);
            $smarty->assign("dictums", $dictums);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT.'/templates/lists/dictum.tpl');
        }

        break;


    case "editDictum":
        $dictum->setDictumId($_POST['id']);
        $info = $dictum->GetInfo();
        $subjects = $subject->EnumerateCertificacion();
        $smarty->assign("subjects", $subjects);
        $smarty->assign("info", $info);
        $smarty->assign("DOC_ROOT", DOC_ROOT);
        $smarty->display(DOC_ROOT.'/templates/forms/new/edit-dictum.tpl');

        break;

    case "saveEditDictum":

        $dictum->setDictumId($_POST['id']);
        $dictum->setDate($_POST['fecha']);
        $dictum->setContent($_POST['informe']);

        if(!$dictum->Update())
        {
            echo "fail[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status_on_popup.tpl');
        }
        else
        {
            echo "ok[#]";
            $smarty->display(DOC_ROOT.'/templates/boxes/status.tpl');
            echo "[#]";
            $result = $dictum->Enumerate();
            $dictums = $util->EncodeResult($result);
            $smarty->assign("dictums", $dictums);
            $smarty->assign("DOC_ROOT", DOC_ROOT);
            $smarty->display(DOC_ROOT.'/templates/lists/dictum.tpl');
        }

        break;
    
    case "getIntegrantes":
        $subjectId = $_POST['subjectId'];
        $people = $personal->EnumerateSubject($subjectId);
        $options = "<option value=''>-- Seleccionar --</option>";
        foreach($people as $person)
        {
            $options .= "<option value='" . $person['personalId'] . "'>" . $person['nombrePersona'] . "</option>";
        }
        echo $options;
        break;
}

?>
