<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
.div1{
	margin-top:90px;
	margin-left:80px;
	width:400px;
	height:200px;
	background-color:purple;
	border-radius:20px;
	opacity:0.8;
	color:white;
	font-family:forte;
	font-size:25px;
}
li:hover {
	background-color:#ff9999;
	transition:ease-out 2s;
	border-radius:30px;
	
}

body{
background-image:url('images/purple.jpg');
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
<a href="#" class="navbar-brand" style="font-family:forte;font-size:25px;color:white">Teacher Panel  </a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="profile_tech.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Profile</a>
</li>
<li>
<a href="tech_tpc.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Topics list</a>
</li>
<li><a href="tech_as.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Assignment</a>
</li>
<li><a href="index.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Log out</a>
</li>
</ul>
</div>
</div>
</nav>
</body>
<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript" src="js/bootstrap.min.js">
</script>
</html>
<?php
session_start();
if(isset($_SESSION['tech'])){
	$tech=$_SESSION['tech'];
	echo "<center>";
	echo "<div class='div1'>";
	echo "<marquee>Welcome to LMS SYSTEM!!!!!!</marquee>"."<br>";
	echo "teacher id :".$tech['t_id']."<br>";
	echo "Teacher Name :".$tech['tname']."<br>";
	echo "course id :".$tech['C_ID']."<br>";
	echo "</div>";
	echo "</center>";
	
}
