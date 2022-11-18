<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();


if($action == "save_flight"){
	$save = $crud->save_flight();
	if($save)
		echo $save;
}
if($action == "delete_flight"){
	$save = $crud->delete_flight();
	if($save)
		echo $save;
}


