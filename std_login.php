<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
</html>
<?php
session_start();
include('assignment.php');
if(isset($_GET['login'])){
	$s_id=$_GET['s_id'];
	$sname=$_GET['sname'];
	$con=mysqli_connect('localhost','root','','db3',3306);
	$query="select s_id,sname,C_ID from student";
	$result=mysqli_query($con,$query);
	if($result){
		while($row=mysqli_fetch_assoc($result)){
	 if($row['s_id']==$s_id && $row['sname']==$sname){
		 $_SESSION['std']=$row;
		 print_r($_SESSION['std']);
		 mysqli_close();
		 header('Location:std_profile.php');
	 }	}
	}
	else{
		echo "error in login";
}
}
?>
<center>
<h1>Student Login</h1>
<img src="images/std.png" style="width:50px;height:50px">
<br>
<div class="slid1">
<form>
<label>Enter your id</label>
<input type="number" name="s_id"><br>
<label>Enter your name</label>
<input type="text" name="sname"><br>
<input type="submit" name="login" value="login">

</form>
</div>
</center>