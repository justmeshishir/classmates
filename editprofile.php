<?php
session_start();
include('config/db.php');
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: home.php");
exit;
}

$userid = $_SESSION['user_id'];
						
						
$q="SELECT * FROM tbl_user WHERE id='$userid'";

$result = mysql_query($q);
$row = mysql_fetch_array($result);

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
		<h1>Edit Profile</h1>
 		<form class="registration" name="registration" method="POST" action="editprofileaction.php" enctype="multipart/form-data">
		<br />Name:  <input type="text" name="fullname" id="fullname" size="60" maxlength="60" value="<?php echo $row['fullname']; ?>" placeholder="Your name" required>
     	<br /><br />Gender: <input type="radio" name="gender" id="gender1" value="Male" checked="checked"> Male <input type="radio" name="gender" id="gender2" value="Female" checked="checked"	> Female
      	<br /><br />College: <select name="college">
        <option selected><?php echo $row['college']; ?></option>
        <option >ACHS college</option>
        <option>Trinity college</option>
        <option>St. Xavier college</option>
        <option>St. Lawerence college</option>
        <option>Texas college</option>
        </select>
        <br /><br />Faculty:
         <select name="faculty">
        <option selected><?php echo $row['faculty']; ?></option>
        <option >BSc.CSIT</option>
        <option>Engineering</option>
        <option>CA</option>
        <option>BBA</option>
        <option>BBS</option>
        </select>
        
         
       <br /><br />Contact number:  <input type="text" name="phone" id="phone" size="60" maxlength="15" value="<?php echo $row['phone']; ?>" placeholder="Your Phone no">
         
      	<br /><br />Email:   <input type="email" name="email" id="email" size="60" maxlength="50" value="<?php echo $row['email']; ?>" placeholder="Your email" required>
         
         <br /><br />Username:  <input type="text" name="username" id="username" size="60" maxlength="20" value="<?php echo $row['username']; ?>" placeholder="Your username" required>
          
          <br /><br />Password:   <input type="password" name="password" id="password" size="60" maxlength="20" value="" placeholder="Your password" required>
             
             
             
           <br /><br />You are a:   <input type="radio" name="member" id="member1" value="Teacher" checked="checked">Teacher <input type="radio" name="member" id="memeber2" value="Student" checked="checked"required	> Student
  

<br /><br /> <input type="submit" value="submit"  required/>
</form>
</div>
<br clear="all" />
      <?php include('include/footer.php') ?>
</div>
</body>
</html>