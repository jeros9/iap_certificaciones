<?php
    if($_POST)
    {
        if(isset($_POST['replyId']))
        {
            $group_forum->setTopicsubId($_POST["topicsubId"]);
            $group_forum->setModuleId($_POST["courseId"]);
            $group_forum->setReplyId($_POST["replyId"]);
            $group_forum->setReply($_POST["reply"]);
            if($_SESSION["User"]["positionId"] == 0 || $_SESSION["User"]["positionId"] == "" || $_SESSION["User"]["positionId"] == null || !isset($_SESSION["User"]["positionId"]))
            {
                $group_forum->setUserId($_SESSION["User"]["userId"]);
                $group_forum->setPersonalId(0);
            }
            else
            {
                $group_forum->setUserId(0);
                $group_forum->setPersonalId($_SESSION["User"]["userId"]);
            }
            $group_forum->AddReply();
        }
        
        if($_GET['modulo'] == 'respuestas')
            header("Location:" . WEB_ROOT . "/respuestas/id/" . $_POST["courseId"] . "&topic=" . $_POST["topicsubId"]);
		else
            header("Location:" . WEB_ROOT . "/view-modules-student/id/" . $_POST["courseId"] . "&tipo=respuestas&topic=" . $_POST["topicsubId"]);
        exit;
    }

    $group_forum->setReplyId($_GET['id']);
    $reply = $group_forum->ReplyInfo();
    $smarty->assign('reply', $reply);
    $smarty->assign('positionId', $_SESSION["User"]["positionId"]);
    $smarty->assign('id', $_GET["id"]);
    $smarty->assign('courseId', $_GET["courseId"]);
    $smarty->assign('topicsubId', $_GET["topicsubId"]);

    if($_SESSION["User"]["positionId"] != 1 && $_SESSION["User"]["positionId"] != 4)
        $smarty->assign('mnuMain', "modulo");
    $smarty->assign("module", $_GET["modulo"]);
?>