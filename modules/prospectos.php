<?php 
if ($_POST) {
	$response = $user->dt_prospects_request($_POST);
	print_r(json_encode($response));
	exit;
}