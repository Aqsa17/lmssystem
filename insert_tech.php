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
include ('function_tch.php');
if(isset($_GET['ADD'])){
	$t_id=$_GET['t_id'];
	$tname=$_GET['tname'];
	$C_ID=$_GET['C_ID'];
	insert($t_id,$tname,$C_ID);
	
}
?>
<hr/>
<center>
<h1 style="color:purple">INSERT TEACHER</h1>
<div class="slid1">
<form action "insert_tech.php">
<label>Teacher-ID:</label>
<input type="number" name="t_id" style="color:purple"></br></br>
<label>Teacher-name:</label>
<input type="text" name="tname" style="color:purple"></br></br>
<label>Course-ID:</label>
<select  name="C_ID" style="color:purple">

<?php
$arr1=fillcourse();
foreach($arr1 as $index=>$row){
	echo "<option value='".$row['C_ID']."'>".$row['C_NAME']."</option>";
	
}
?>
</select></br>
<input type="submit" name="ADD" value="add"style="color:purple">
</form>
</div>
</center>
<?php
select();


?>