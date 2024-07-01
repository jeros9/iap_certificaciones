<?php
$curricula = $course->EnumerateActive();
$smarty->assign("curricula", $curricula);
$smarty->assign("id", $_GET["id"]);
