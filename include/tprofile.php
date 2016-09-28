<?php

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
<link href="css/profile.css" type="text/css"  rel="stylesheet" />
</head>

<body>

<div class="wrapper">
<?php include('include/header.php'); ?>
 <?php
						$userid = $_SESSION['user_id'];
	
						$q = "SELECT * FROM tbl_user WHERE id = '$userid'";
	
						$result = mysql_query($q);
	
						$num = mysql_num_rows($result);
	
						$row = mysql_fetch_array($result);
			?>
	<div class="profile">
    	<div class="info">
        	<div class="image">
             <?php
			 	$r = "SELECT * FROM tbl_image WHERE user_id = '$userid'";
				$result1 = mysql_query($r);
				$row1 = mysql_fetch_array($result1);
				
			 ?>
            <img src="userimage/<?php echo $row1['photo_thumb']; ?>" height="220" width="150" />
           </div>
            <div class="name">
            
			 
            	<br /><br /><br /><br />
            	Name: <?php echo $row['fullname']; ?><br />
                College: <?php echo $row['college']; ?><br />
                Faculty:  <?php echo $row['faculty']; ?><br />
               
                <a href="editprofile.php">Edit Profile</a>
              
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
		 	<li><a href="tprofile.php">Home</a></li>
            <li><a href="#">Give a Test</a></li>
            <li><a href="answerquestion.php">Answer Questions</a></li>
            <li><a href="#">Discussions</a></li>
            <li><a href="uploadfiles.php">Upload files</a></li>
		 
</ul>
        </div>
        <div class="wall">
        	<div class="QA">
            	<?php				
				$q = "SELECT * FROM tbl_qa WHERE id ORDER BY id DESC";
				$result = mysql_query($q);
				$num = mysql_num_rows($result);
				for($i=1; $i<=$num; $i++)
				{
					$row = mysql_fetch_array($result);
					$question=$row['question'];
					$answer = $row['answer'];
					$user_id = $row['user_id'];
		?>
        
            <?php
				$s="SELECT * FROM tbl_user where id='$user_id'";
				$result2=mysql_query($s);
				$row2=mysql_fetch_array($result2);
				
				$fullname=$row2['fullname'];
			?>
        	<div class="questiontitle" >
            	Question: <?php echo $question ?>
            </div>    	
            <div class="answertitle" >
            	Answer: <?php echo $answer ?><br />
                answered by <?php echo $fullname ?>
            </div>
         <?php 
				}
		?>
        </div>
        </div>
        <div class="latest">
        	<div class="uploads">
            <h3>Latest Uploads</h3><br />
            <div class="echo">
            	<?php				
				$q = "SELECT * FROM tbl_upload WHERE id ORDER BY id DESC";
				$result = mysql_query($q);
				for($i=1; $i<=5; $i++)
				{
					$row = mysql_fetch_array($result);
					$upload=$row['upload'];
				?>
                <?php echo $upload; ?><br />
                
                <?php 
					}
				?>
               </div>
				<a href="files.php">See all</a>
                
        
            </div>
            <div class="events">
            </div>
        </div>
	</div>	
    <?php include('include/footer.php'); ?>
</div>




</body>
</html>