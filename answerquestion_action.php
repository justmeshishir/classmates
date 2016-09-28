<?php
	session_start();
	include('config/db.php');
	$answer = $_POST['answerbox1'];
	$user_id = $_SESSION['user_id'];
	$questionid = $_POST['questionid'];
	$q="INSERT INTO `tbl_answer` (`id`, `question_id`, `user_id`, `answer`) VALUES (NULL, '$questionid', '$user_id', '$answer');";
	mysql_query($q);
	$r = "SELECT * FROM tbl_questions WHERE id = '$questionid';";
				$result = mysql_query($r);
				$row = mysql_fetch_array($result);
				$question = $row['question'];
	$s ="INSERT INTO `tbl_qa` (`id`, `question`,`answer`,`user_id`) VALUES (NULL, '$question', '$answer', '$user_id');";
	mysql_query($s);	
	$t = "DELETE FROM `classmates`.`tbl_answer` WHERE `tbl_answer`.`question_id` ='$questionid';";
	mysql_query($t);
	$u ="DELETE FROM `classmates`.`tbl_questions` WHERE `tbl_questions`.`id` = '$questionid'";
	mysql_query($u);			
	header("Location: answerquestion.php");

?>