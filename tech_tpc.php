<?php
session_start();
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
<a href="#" class="navbar-brand" style="font-family:forte;font-size:25px;color:white">Teacher Panel</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="profile_tech.php"style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Profile</a>
</li>
<li>
<a href="tech_tpc.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Topics list</a>
</li>
<li><a href="tech_as.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Assignment</a>
</li>
<li><a href="index.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Logout</a>
</li>
</ul>
</div></div>
</nav>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
<?php
include('function_topics.php');
connect();

if(isset($_GET['ADD'])){
	$tp_id=$_GET['tp_id'];
	$tp_name=$_GET['tp_name'];
	$C_ID=$_GET['C_ID'];
	insert($tp_id,$tp_name,$C_ID);

}

?>
<hr/>
<center>
<h1 style="color:purple">INSERT TOPICS</h1>
<div class="slid1">
<form action="tech_tpc.php">
<label>Topic-ID:</label>
<input type="number" name="tp_id" style="color:purple"><br>
<label>Topic-name:</label>
<input type="text" name="tp_name" style="color:purple"><br>
<label>Course-ID:</label>
<select  name="C_ID" style="color:purple">

<?php
$arr1=fillcourse();
foreach($arr1 as $index=>$row){
echo "<option value='".$row['C_ID']."'>".$row['C_NAME']."</option>";	
}
?>
</select><br>
<input type="submit" name="ADD" value="add" style="color:purple">
</form>
</div>
</center>
<?php
function show_tp(){
$con=connect();
if($con){
	$tech=$_SESSION['tech'];
	$c_id=$tech['C_ID'];
$query="SELECT tp.tp_id,tp.tp_name,c.C_ID from topic tp inner join course c on(tp.C_ID=c.C_ID)where c.C_ID=$c_id";
$result=mysqli_query($con,$query);
if($result){
	echo "<center>";
		echo "<h1 id='h1'>topic List</h1>";
		echo "<table class='t2'>"; 
		echo "<tr>";
        echo"<th>ID</th><th>Title</th><th>C_ID</th> <th>Edit</th><th>Delete</th>";
	    echo"</tr>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
			  echo "<td>".$row['tp_id']."</td>";
			  echo "<td>".$row['tp_name']."</td>";
			  echo "<td>".$row['C_ID']."</td>";
 echo"<td><a href='update_techas.php?id=".$row['tp_id']."'>edit</a></td>";
echo"<td><a href='delete_tass.php?id=".$row['tp_id']."'>delete</a>
         </td>";	
echo "</tr>";
	}
	echo "</table>";
		  echo "</center>";
		  mysqli_close($con);
}
	
	else{
		mysqli_close($con);
 echo "data not selected";	
	}
}}
show_tp();
?>