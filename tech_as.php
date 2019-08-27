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
<a href="profile_tech.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Profile</a>
</li>
<li>
<a href="tech_tpc.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Topics list</a>
</li>
<li><a href="tech_as.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Assignment</a>
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
include('assignment.php');
connect();
if(isset($_GET['add'])){
$id=$_GET['id'];
$title=$_GET['title'];	
$C_ID=$_GET['C_ID'];	
insert($id,$title,$C_ID);
}
?>
<hr/>
<center>
<h1 style="color:purple">INSERT Assignment</h1>
<div class="slid1">
<form action ="tech_as.php">
<label>Id</label>
<input type="number" name="id"  style="color:purple"><br>
<label>Title</label>
<input type="text" name="title"  style="color:purple"><br>
<label>Course-ID:</label>
<select  name="C_ID"  style="color:purple">
<?php
$arr1=fillcourse();
foreach($arr1 as $index=>$row){
	echo "<option value='".$row['C_ID']."'>".$row['C_NAME']."</option>";
}
?>
</select><br>
<input type="submit" name="add" value ="Add"  style="color:purple">
</form>
</div>
</center>
<?php
function select_ass(){
$con=connect();
if($con){
$tech=$_SESSION['tech'];
$c_id=$tech['C_ID'];
$query="SELECT a.id,a.title,c.C_ID from assignment a inner join course c on (a.C_ID=c.C_ID) where c.C_ID=$c_id";
$result=mysqli_query($con,$query);
if($result){
echo "<center>";
		echo "<h1 id='h1'>Assignment List</h1>";
		echo "<table class='t2'>"; 
		echo "<tr>";
        echo"<th>ID</th><th>Title</th><th>C_ID</th>";
	    echo"</tr>";
		while($row=mysqli_fetch_assoc($result)){
           echo "<tr>";
			  echo "<td>".$row['id']."</td>";
			  echo "<td>".$row['title']."</td>";
			  echo "<td>".$row['C_ID']."</td>";
 echo"<td><a href='update_techas.php?id=".$row['id']."'>edit</a></td>";
echo"<td><a href='delete_tass.php?id=".$row['id']."'>delete</a>
         </td>";	
echo "<td><a href='show.php'>Show Assignment</a></td>";
echo "</tr>";
		  }
		  echo "</table>";
		  echo "</center>";
		  mysqli_close($con);
		  }
else{
mysqli_close($con);
 echo "data not selected";	
	}}	
}
 select_ass();
?>