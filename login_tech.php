<?php
session_start();

?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>

<?php
include('function_tch.php');
if(isset($_GET['login'])){
	$t_id=$_GET['t_id'];
	$tname=$_GET['tname'];
	$con=mysqli_connect('localhost','root','','db3',3306);
	$query="select t_id,tname,C_ID from teacher";
	$result=mysqli_query($con,$query);
	if($result){
		while($row=mysqli_fetch_assoc($result)){
		if($row['t_id']==$t_id && $row['tname']==$tname){
        $_SESSION['tech']=$row;
		 print_r($_SESSION['tech']);
      mysqli_close($con);
header('Location:profile_tech.php');	  
	
		}	}}	
else{
	echo "error in login";	
}}
?>
<center>
<h1>Teacher login</h1>
<img src="images/te.png" style="width:50px;height:50px">
<br>
<div class="slid1">
<form>
<label>Teacher Id</label>
<input type="number" name="t_id"><br>
<label>Teacher name</label>
<input type="text" name="tname"><br>
<input type="submit" name="login" value="login"><br>
</form>