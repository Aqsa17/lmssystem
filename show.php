<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
input{
	width:150px;
	background-color:purple;
	opacity:0.7;
	color:white;
}
#h2{
	color:purple;
	text-decoration:underline;
}
button{
	width:70px;
	background-color:purple;
	opacity:0.7;
	color:white;
	float:right;
}
</style>
</head>
<center>
<table width="400px" height="200px" border="2px solid black">
<form action="">
<tr><td colspan='2'><h2 id="h2">show assignment </h2></td></tr><br>
<tr>
<td><label>please enter course ID:</label></td>
<td><input type='number' name='c_id'></td>
</tr>
<tr>
<td><button name='show' value="show">show</button></td>
</tr>
</form>
</table>
</center>
<?php
include('submission.php');
connect();
if(isset($_GET['show'])){
	$c_id=$_GET['c_id'];
	show_ass($c_id);
}


?>

