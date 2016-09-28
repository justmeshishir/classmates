<?php
	include('config/db.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Colleges in nepal</title>
<link href="css/nonuser.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
<?php include('include/header.php'); ?>
<div class="wall">
	<div class="header">
	<h1>Colleges In Nepal</h1>
</div>
<div class="echo">
	<?php				
				$q = "SELECT * FROM tbl_college WHERE id ORDER BY id ASC";
				$result = mysql_query($q);
				$num = mysql_num_rows($result);
				for($i=1; $i<=$num; $i++)
				{
					$row = mysql_fetch_array($result);
					$name = $row['name'];
					$location = $row['location'];
					$faculties = $row['faculties'];
					$contact = $row['contact'];
					$website = $row['website'];
					
		?>
        <h3><?php echo $name ?></h3><br />
         <?php echo $location ?><br />
         <?php echo $faculties ?><br />
         <?php echo $contact ?><br />
         <?php echo $website ?><br />
   <?php
				}
	?>
</div>
    <?php include('include/footer.php');?>
</div>
</div>
</body>
</html>