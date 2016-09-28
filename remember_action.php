<?php

session_start();
include('config/db.php');
$qa_id = $_POST['hidden'];
$user_id = $_SESSION['user_id'];
$q = "SELECT * FROM tbl_qa WHERE id='$qa_id'";
				$result = mysql_query($q);
				$row = mysql_fetch_array($result);
					$question=$row['question'];
					$answer = $row['answer'];
					
$s = "INSERT INTO `tbl_remembers` (`id`, `user_id`, `question`, `answer`) VALUES (NULL, '$user_id', '$question', '$answer');";
mysql_query($s);

header("Location: profile.php");
?>