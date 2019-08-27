<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
include('function_std.php');
if(isset($_GET['s_id'])){
$s_id=$_GET['s_id'];
$record=search($s_id);
if($record!=null){
?>
<center>
<form action="update(std).php">
s_id:<input type="number" name="s_id" value="<?php echo $record['s_id']; ?>"/><br>

sname:<input type="text" name="sname" value="<?php echo $record['sname']; ?>"/><br>
<select name="C_ID"> 
<?php
$arr1=fillcourse();
foreach($arr1 as $index => $row){
	echo "<option value='".$row['C_ID']."'>".$row['C_NAME']."</option>";
}


?>

</select><br>
<input type="submit" name="add" value="update">
</form>
</center>	
<?php

}}
if(isset($_GET['add'])){
	$s_id=$_GET['s_id'];
	$sname=$_GET['sname'];
	$C_ID=$_GET['C_ID'];
	update($s_id,$sname,$C_ID);
	header("Location:insert(std).php");
	
	
}

?>	
	
	
	


