<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>result</title>
</head>
<body>
  <img src="no3.png"alt="no3" width="100%" height="100"> 
<hr style="border: none; height: 25px; background-color:darkblue;>
   
 
 <div class="col-md-12" style="margin-top:25px">
            <h2 style="text-align :center">Bengaluru City University</h2>
        </div>
  
<img src="no1.png"alt="no1" width="100%" height="70">
 
 <img src="no7.png"alt="no7.png" width="714px" height="68px">
<hr>BCA 1sem Examination Result 22-23</hr>
 <hr>
<img src="013.png"alt="013" width="1058px" height="826px">
<hr>
<div style="text-align:center;argin-top:40px;">
<a href="result.pdf" download>Download PDF</a>
  
</div>

	<a href="logout.php">Logout</a>
	<h1></h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>