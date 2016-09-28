<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classmates</title>
<link href="css/home2.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="wrapper" >
		<div class="banner">
    		<?php include('include/header.php'); ?>
        	<div class="banner2">
        		<h4><font color="#FFFFFF">Attendance Please?</font></h4>
                <form action="loginaction.php" method="post" name="login" id="login">
        			<input class="username" name="username" id="username" type="text" placeholder="Username" required />
					<input class="password" name="password" id="password" type="password" placeholder="Password" required /> 
                    <br clear="all" />
					<input class="present" type="submit" value="Present">
                </form>
                <span>Forgot your Password?</span>
        	
            <?php
if(isset($_GET['err'])&&$_GET['err']=='yes')
	{
?>
<div style="color:#F00; text-align:center;">Username/Password Incorrect. Try Again</div>
<?php
	}
?>
</div>
        	<div class="banner3">
        			<h1 class="text"> Divided by colleges,</h1> 
                    <h1 class="text2">United by classmates...</h1>
   			</div>
            <br clear="all"/>
            <div class="joinus" >
            	 <form action="joinus.php">
            	  <input type="submit" class="joinusBut" value="Join Us"/>
                  </form>
            </div>
   	 	</div>
        <div class="intro">
        		<a href="colleges_nepal.php"><div class="box1">
            	<div class="header">
                	<h2>Colleges in Nepal</h2>
                </div>
            </div></a>
            <div class="box2">
            <div class="header">
                	<h2>Find a College</h2>
                </div>
            </div>
            <div class="box3">
            	<div class="header">
                	<h2>Teacher's Blog</h2>
                </div>
            </div>
        </div>
        <br clear="all" />
      <?php include('include/footer.php') ?>
</body>
</html>