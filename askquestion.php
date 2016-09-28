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
            <br clear="all" />
        </div>
        <div class="nav">
         <ul>
			 
            <li><a href="profile.php">Home</a></li>
            <li><a href="#">Take a Test</a></li>
            <li><a href="askquestion.php">Ask a Question</a></li>
            <li><a href="#">Discussions</a></li>
            <li><a href="remember.php">Remembers</a></li>
        </ul>
        </div>
        <div class="wall">
        <form action="askquestion_action.php" method="post">
        	<input type="text" name="question" id="question" class="question" placeholder="Write a question" /><br />
            <input type="submit" name="ask" id="ask" class="ask" value="Ask"  />
        </form>
        </div>
	</div>	
    <?php include('include/footer.php');?>
   </div>

</body>
</html>