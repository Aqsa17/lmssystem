<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
li:hover {
	background-color:#ff9999;
	transition:ease-out 1s;
	border-radius:30px;
	

}
</style>
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color:purple;opacity:0.8" >
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand" style="font-family:forte;font-size:25px;color:white">Admin Panel</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="insert.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Course</a>
</li>
<li>
<a href="insert_tech.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Teacher</a>
</li>
<li><a href="insert(std).php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Student</a>
</li>
<li><a href="insert_tp.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Topics</a>
</li>
<li><a href="insert_as.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Assignment</a>
</li>
<li><a href="index.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Logout</a>
</li>
</ul>
</div>
</div>
</nav>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
<?php
include('definefunction.php');
if(isset($_GET['ADD'])){
	$C_ID=$_GET['C_ID'];
	$C_NAME=$_GET['C_NAME'];
	insert($C_ID,$C_NAME);
	
}

?>
<hr/>
<center>
<h1 style="color:purple">INSERT COURSE</h1>
<div class="slid1">
<form  action="insert.php">
<label>Course-ID:</label>
<input type="number" name="C_ID" style="color:purple"><br>
<label>Course-name:</label></td>
<input type="text" name="C_NAME" style="color:purple"><br>
<input type="submit" value="add" name ="ADD" style="color:purple">

</form>
</div>
</center>
<hr/>
<?php

select();
?>