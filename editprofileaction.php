<?php
session_start();
include('config/db.php');
$userid = $_SESSION['user_id'];

$name=$_POST['fullname'];
$gender=$_POST['gender'];
$college=$_POST['college'];
$faculty=$_POST['faculty'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['member'];

$q="UPDATE `classmates`.`tbl_user` SET `type`='$type', `fullname` = '$name', `email`='$email, `username` = '$username', `password` = '$password', `Gender` = '$gender', `college` = '$college', `faculty`='$faculty', `phone`='$phone' WHERE id = '$userid'";



	header("Location: profile.php");
?>