<html>
<head>
<style>
input{
	background_color:black;
	color:black;
	border_radius:20px;
	
}
</style>


</head>
<body bgcolor='tomato'>
</body>
<?php
include('submission.php');
if(isset($_GET['s_id'])){
	$s_id=$_GET['s_id'];
	search($s_id);
}
?>
<center>
<form action='file.php'>
<h2>search assignment</h2><br>
<input type='number' name='s_id'><br><br>
<input type='submit' name='show' value="show">
</form>
</center>
<?php
if(isset($_GET['show'])){
	select($s_id);
}


?>