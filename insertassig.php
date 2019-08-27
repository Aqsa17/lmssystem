<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
.slid2{
	width:700px;
	
	opacity:0.8;
	background-color:purple;	
	
}

</style>
</head>
<?php
include('submission.php');
?>
<center>
<h1 style="color:purple">submit assignment </h1>
<div class="slid2">
<form action='insertassig.php'>
<label>AID:</label>
<input type="number" name='id'  style="color:purple">
<br>
<label>AName:</label>
<input type="text" name='title'  style="color:purple">
<br>
<label>C_ID:</label>
<select type="number" name='C_ID' style="color:purple">
<?php
$arr1=fillcourse();
/*question */
foreach($arr1 as $index => $row){

	echo "<option value='".$row['C_ID']."'>".$row['C_NAME']."</option>";	
	
}
?>
</select><br>



<br>
<label>s_id:</label>
<input type="number" name='s_id' style="color:purple"><br>
<label>sname:</label>
<input type="text" name='sname' style="color:purple"><br>
<label>type here or choose file to upload:</label>
<input type='file' name="value" style="color:purple" id="in1">

<textarea cols="50" rows="10" type="text" name='value' style="color:purple"></textarea><br>
<input type="submit" name="submit" value="submit" style="color:purple">
</form>
<a href='file.php'><button>show assignment</button></a>
</div>
</center>
<?php
if(isset($_GET['submit'])){
	$id=$_GET['id'];
	$title=$_GET['title'];
	$C_ID=$_GET['C_ID'];
	$s_id=$_GET['s_id'];
	$sname=$_GET['sname'];
	$value=$_GET['value'];
	insert($id,$title,$C_ID,$s_id,$sname,$value);

}


?>