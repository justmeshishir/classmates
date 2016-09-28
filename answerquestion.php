<?php
session_start();
include('config\db.php');
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
       
    	<?php				
				$q = "SELECT * FROM tbl_questions WHERE id ORDER BY id DESC";
				$result = mysql_query($q);
				$num = mysql_num_rows($result);
				for($i=1; $i<=$num; $i++)
				{
					$row = mysql_fetch_array($result);
					$userid=$row['user_id'];
					$question = $row['question'];
					$questionid = $row['id'];
		?>
        
    	    <div class="questiondisplay">
            <div class="headerquestion">
            <?php
				$s="SELECT * FROM tbl_user where id='$userid'";
				$result2=mysql_query($s);
				$row2=mysql_fetch_array($result2);
				
				$fullname=$row2['fullname'];
				
			?>
           			
            	
                	<h4><?php echo $i.')'.' '.$question ?></h4> <span>asked by <?php echo $row2['fullname']?></span></div>
                    <form action="answerquestion_action.php" method="post">
                    <div class="answerbox">
                    	<input type="text" name="answerbox1" class="answerbox1" id="answerbox1" placeholder="Answer it.." /><br />
                        <input type="hidden" name="questionid" id="questionid" value="<?php echo $questionid ?>"  />
                        <input type="submit" name="answer" class="answer" id="answer" value="Answer" /><br /><br />
                         
                    </div>
                    </form>
	            	
            </div>
        <?php
				 }
		?>	
       </div>
 
    <?php include('include/footer.php');?>
   </div>
</body>
</html>