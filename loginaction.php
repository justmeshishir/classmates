<?php
session_start();
include('config/db.php');
$username = $_POST['username'];
$password = $_POST['password'];


$q = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
$result = mysql_query($q);

$num = mysql_num_rows($result);

if($num==0)
	{
		header("Location: home.php?err=yes");
		exit;
	}
else
	{
		$row = mysql_fetch_array($result);
		$_SESSION['username'] = $username;
		$_SESSION['fullname'] = "$row[fullname]";
		$_SESSION['type']= "$row[type]";
		
		$_SESSION['user_id'] = $row['id'];
		
		$_SESSION['login'] = 'yes';
		//echo $_SESSION['fullname'].' '.$_SESSION['type'];
		
			header("Location: profile.php");
	}

?>