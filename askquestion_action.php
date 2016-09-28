<?php
session_start();
include('config/db.php');
$question = $_POST['question'];
$userid = $_SESSION['user_id'];

$q = "INSERT INTO `tbl_questions` (`id`, `user_id`, `question`) VALUES (NULL, '$userid', '$question');"; 

mysql_query($q);

header("Location: profile.php");

?>