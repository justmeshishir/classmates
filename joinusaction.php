<?php
session_start();
include('config/db.php');
include('image_functions.php');
$name=$_POST['fullname'];
$gender=$_POST['gender'];
$college=$_POST['college'];
$faculty=$_POST['faculty'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['member'];

$q="INSERT INTO `tbl_user` (`id`, `type`, `fullname`, `email`, `username`, `password`, `Gender`, `college`, `faculty`, `phone`) VALUES (NULL, '$type', '$name', '$email', '$username', '$password', '$gender', '$college', '$faculty', '$phone');";

//echo mysql_error();

if(mysql_query($q))
	{
		$id = mysql_insert_id();
		$image = $id.'.jpg';
		$image_thumb = $id.'_thumb.jpg';
		if(ImgUpload('image','userimage/',$image))
			{
				ImageResizeWithCrop(220,150,"userimage/$image","userimage/$image_thumb");
				
				
				$r = "INSERT INTO `tbl_image` (`id`, `user_id`, `photo_thumb`,`photo_large`) VALUES (NULL, '$id', '$image_thumb','$image');";
				mysql_query($r);
			}
	}


	header("Location: thanksforjoining.php");
?>