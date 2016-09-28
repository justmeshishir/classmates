<?php
session_start();
include('config\db.php');

if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: home.php");
exit();
}
else
{
	if($_SESSION['type']=="student")	include('include/sprofile.php');
	else	include('include/tprofile.php');
}
?>