<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
</html>
<?php
session_start();
include('function_std.php');
if(isset($_GET['signup'])){
	$s_id=$_GET['s_id'];
	$sname=$_GET['sname'];
	$C_ID=$_GET['C_ID'];
	insert($s_id,$sname,$C_ID);

	
}
?>
<center>
<h1>Create your Account</h1>
<img src="images/std.png" style="width:50px;height:50px">
<br>
<div class="slid1">
<form action="signup.php">
<label>enter your id</label>
<input type="number" name="s_id"><br>
<label>enter your name</label>
<input type="text" name="sname"><br><br>
<label>Course-ID</label>
<select name="C_ID">
<?php
$arr1=fillcourse();
foreach($arr1 as $index => $row){
	echo "<option ='".$row['C_ID']."'>".$row['C_NAME']."</option>";
	
}
?>
</select><br>
<input type="submit" name="signup" value="signup">
</form>
</center>
<hr/>


