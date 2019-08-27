<?php
session_start();
	
	

//$c_id=$_SESSION['C_ID'];

?>
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
#h1{
	color:purple;
	font-family:forte;
	margin-top:50px;
	text-decoration:underline;
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
<a href="#" class="navbar-brand" style="font-family:forte;font-size:25px;color:white">Student Panel</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="std_profile.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Profile</a>
</li>
<li>
<a href="std_assignment.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Assignment List</a>
</li>
<li><a href="std_topic.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Topics List</a>
</li>
<li><a href="logout_std.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Logout</a>
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
include('function_topics.php');

function select2(){

$con=connect();

if($con){

$std = $_SESSION['std'];
$c_id=$std['C_ID'];

$query="select t.tp_id, t.tp_name, c.C_ID from topic t inner join course c on (t.C_ID = c.C_ID ) WHERE c.C_ID = $c_id";
$result=mysqli_query($con,$query);
if($result){
	echo "<center>";
	echo "<h1 id='h1'>Topic List</h1>";
	echo "<table class='t2'>";
	echo "<tr>";
	echo "<th>t_id</th><th>topic name</th><th>C_id</th>";
	echo "</tr>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['tp_id']."</td>";
		echo "<td>".$row['tp_name']."</td>";
		echo "<td>".$row['C_ID']."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	echo "</center>";
 	mysqli_close($con);
}else{
echo "data not selected";
}	}
}
select2();
?>