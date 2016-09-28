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
<link href="css/profile.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
<?php include('include/header.php'); ?>
	<div class="profile">
    	<div class="info">
        	<div class="image">
           
            </div>
            
            <div class="name">
            	
            </div>
            <a href="leaveclass.php">
            <div class="leave">
            	<input type="button" value="Leave Class" class="leaveclass" />
            </div>
            </a>
            <br clear="all" />
        </div>
        <div class="nav">
         	
<ul>         
		 	<li><a href="profile.php">Home</a></li>
            <li><a href="#">Give a Test</a></li>
            <li><a href="answerquestion.php">Answer Questions</a></li>
            <li><a href="#">Discussions</a></li>
            <li><a href="uploadfiles.php">Upload files</a></li>
		 
</ul>
        </div>
        <div class="upload">
        <form action="uploadfiles_action.php" method="post" enctype="multipart/form-data">
          <b>Description:</b> <input type="text" class="description" name="description" id="description" placeholder="Description of the file.." required /><br />
        	<input type="file" class="upload_file" name="upload" id="upload"  required/><br />
            <input type="submit" class="upload_button" name="upload_button" id="upload_button" value="Upload" />
         </form>
        </div>

	</div>	
    <?php include('include/footer.php'); ?>
</div>

</body>
</html>