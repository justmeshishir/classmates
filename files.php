<?php
session_start();
include('config\db.php');
//$id=$_GET['id'];

if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: home.php");
exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
<link href="css/nonuser.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
	<?php include('include/header.php'); ?>
    <div class="wall">
     
	<table width="1000" cellpadding="0" cellspacing="0" align="center" border="0">
    <tr>
    <td align="center" height="100"><h1>Uploaded Files</h1></td>
    </tr>
    <tr>
    <td><b>Files</b></td>
    <td><b>Uploaded by</b></td>
    <td><b>Description</b></td>
    </tr>
    <tr></tr>
    <?php				
				$q = "SELECT * FROM tbl_upload WHERE id ORDER BY id DESC";
				$result = mysql_query($q);
				$num = mysql_num_rows($result);
				for($i=1; $i<=$num; $i++)
				{
					$row = mysql_fetch_array($result);
					$userid=$row['user_id'];
					$desc = $row['description'];
					$upload = $row['upload'];
					
				$s="SELECT * FROM tbl_user where id='$userid'";
				$result2=mysql_query($s);
				$row2=mysql_fetch_array($result2);
				
				$fullname=$row2['fullname'];
		?>
    <tr>
    <td><a href="uploads/<?php echo $upload;?>"><?php echo $upload ?></a></td>
    <td><?php echo $fullname ?></td>
    <td><?php echo $desc ?></td>
    </tr>
    <?php
				}
	?>
    </table>
   </div>
<?php include('include/footer.php');?>
</div>
</body>
</html>