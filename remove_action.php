<?php
session_start();
	include('config/db.php');
	$id = $_POST['hidden'];
	$user_id = $_SESSION['user_id'];
	
	$q = "DELETE FROM `classmates`.`tbl_remembers` WHERE `tbl_remembers`.`id` ='$id';";
	mysql_query($q);
	
	
	header("Location: remember.php");
?>