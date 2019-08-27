<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
</html>
<?php
session_start();
if(isset($_GET['login'])){
	$name=$_GET['name'];
	$password=$_GET['password'];
	
	$con=mysqli_connect('localhost','root','','db3',3306);
	$query="select name,password from admin ";
	$result=mysqli_query($con,$query);
	if($result){
		while($row=mysqli_fetch_assoc($result)){
		if($row['name']==$name && $row['password']==$password){
			$_SESSION['admin']=$row;
			mysqli_close();
		header('Location:profile.php');
	
	
	}
}}else{
		echo "<script>alert('error in login');</script>";
}}

?>

<center>
<h1>Admin login</h1>
<img src="images/admin.jpg" style="width:50px;height:50px">
<br>
<div class="slid1">
<form>
<label> Admin-name:</label>
<input type="text" name="name"><br>
<label> Admin-password:</label>
<input type="password" name="password"><br>
<input type ="submit" name="login" value="login">
</form>
</div>
</center>