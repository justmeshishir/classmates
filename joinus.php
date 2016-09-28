<?php
	session_start();
	include('config/db.php');
	 
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="css/joinus.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
		<?php include('include/header.php'); ?>
	<div class="login">
		<h1>Sign Up</h1>
 		<form class="registration" name="registration" method="POST" action="joinusaction.php" enctype="multipart/form-data">
		<br />Name:  <input type="text" name="fullname" id="fullname" size="60" maxlength="60" value="" placeholder="Your name" required>
     	<br /><br />Gender: <input type="radio" name="gender" id="gender1" value="Male" checked="checked"> Male <input type="radio" name="gender" id="gender2" value="Female" checked="checked"	> Female
      	<br /><br />College: <select name="college">
        <option selected>Select your college</option>
        <option >ACHS college</option>
        <option>Trinity college</option>
        <option>St. Xavier college</option>
        <option>St. Lawerence college</option>
        <option>Texas college</option>
        </select>
        <br /><br />Faculty:
         <select name="faculty">
        <option selected>Select your faculty</option>
        <option >BSc.CSIT</option>
        <option>Engineering</option>
        <option>CA</option>
        <option>BBA</option>
        <option>BBS</option>
        </select>
        
         
       <br /><br />Contact number:  <input type="text" name="phone" id="phone" size="60" maxlength="15" value="" placeholder="Your Phone no">
         
      	<br /><br />Email:   <input type="email" name="email" id="email" size="60" maxlength="50" value="" placeholder="Your email" required>
         
         <br /><br />Username:  <input type="text" name="username" id="username" size="60" maxlength="20" value="" placeholder="Your username" required>
          
          <br /><br />Password:   <input type="password" name="password" id="password" size="60" maxlength="20" value="" placeholder="Your password" required>
             
             
             
           <br /><br />You are a:   <input type="radio" name="member" id="member1" value="Teacher" checked="checked"> Teacher <input type="radio" name="member" id="memeber2" value="Student" checked="checked" required	> Student
  

 <br /><br />Upload profile picture: <input type="file" name="image" id="image" />   <br /><br /> <input type="submit" value="submit"  required/>         
             
</form>
</div>
<br clear="all" />
      <?php include('include/footer.php') ?>
</div>
</body>
</html>