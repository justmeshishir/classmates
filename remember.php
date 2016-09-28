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
<link href="css/nonuser.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
<?php include('include/header.php'); ?>


<div class="wall">
 <div class="nav">
         <ul>
			 
            <li><a href="profile.php">Home</a></li>
            <li><a href="#">Take a Test</a></li>
            <li><a href="askquestion.php">Ask a Question</a></li>
            <li><a href="#">Discussions</a></li>
            <li><a href="remember.php">Remembers</a></li>
        </ul>
         </div>
 <?php				
 				$user_id=$_SESSION['user_id'];
				$q = "SELECT * FROM tbl_remembers WHERE id ORDER BY id DESC";
				$result = mysql_query($q);
				$num = mysql_num_rows($result);
				for($i=1; $i<=$num; $i++)
				{
					$row = mysql_fetch_array($result);
					$question=$row['question'];
					$answer = $row['answer'];
					$id = $row['id'];
					if($user_id == $row['user_id'])
						{
		?>
        <div class="qa">
        <div class="questiontitle" >
            	<b>Question: <?php echo $question ?></b>
            </div>    	
            <div class="answertitle" >
            	Answer: <?php echo $answer ?>
             </div>
             
             <form method="post" action="remove_action.php">
             <input type="hidden" name="hidden" id="hidden"  value="<?php echo $id; ?>" />
             <input type="submit" name="remove" id="remove" class="remove_button" value="Remove" />
             </form>
        </div>
         <?php 
					}
				}
		?>
</div>
 <?php include('include/footer.php');?>
</div>
</body>
</html>