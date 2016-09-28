<?php
session_start();
include('config/db.php');
$desc= $_POST['description'];
$id =$_SESSION['user_id'];
$file = rand(1000,100000)."-".$_FILES['upload']['name'];
$file_loc = $_FILES['upload']['tmp_name'];
$file_size = $_FILES['upload']['size'];
$file_type = $_FILES['upload']['type'];
$folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  

 
 // make file name in lower case
 $new_file_name = strtolower($file);
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 move_uploaded_file($file_loc,$folder.$final_file);
 $q="INSERT INTO `tbl_upload` (`id`, `user_id`, `description`, `upload`, `type`, `size`) VALUES (NULL, '$id', '$desc', '$file', '$file_type', '$file_size');";

  mysql_query($q);
	header("Location: tprofile.php");
	
?>