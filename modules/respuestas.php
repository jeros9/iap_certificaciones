<?php
	if($_POST)
    { 
        if(isset($_POST['reply']))
        {
            $group_forum->setTopicsubId($_POST["topicsubId"]);
            $group_forum->setModuleId($_POST["courseId"]);
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
        else
        {
            $group_forum->setModuleId($_POST["moduleId"]);
            $group_forum->setReplyId($_POST['replyId']);
            $group_forum->DeleteReply();
        }
    }

    $group_forum->setTopicsubId($_GET["topic"]);
    $topic = $group_forum->TopicsubInfo();
    $smarty->assign('topic', $topic);
    
    $smarty->assign('topicsubId', $_GET["topic"]);
    $smarty->assign('positionId', $_SESSION["User"]["positionId"]);
    $smarty->assign('courseId', $topic['courseId']);
    
    $replies = $group_forum->Replies();
    $smarty->assign('replies', $replies);
    $smarty->assign('id', $_GET["topic"]);
    if($User["positionId"] != 1 && $User["positionId"] != 4)
        $smarty->assign('mnuMain', "modulo");
    $smarty->assign('module', 'respuestas');
?>