<?php
include('function_tch.php');
if(isset($_GET['t_id'])){
	$t_id=$_GET['t_id'];
	$record=search($t_id);
	if($record!=null){
	?>
<form action "update_tch.php">
<label>Teacher ID</label>
<input type="number" name="id" value="<?php echo $record['t_id'];?>"/><br>
<label>Teacher Name</label>
<input type="text" name="title" value="<?php echo $record['tname'];?>"/><br>
<select name="C_ID">
<?php
$arr1=fillcourse();
foreach($arr1 as $index => $row){
	echo "<option value='".$row['C_ID']."'>".$row['C_NAME']."</option>";
}
?>
</select><br>
<input type="submit" name="update" value="update">
</form>
<?php
}}
if(isset($_GET['update'])){
	$id=$_GET['t_id'];
	$title=$_GET['tname'];
	$C_ID=$_GET['C_ID'];
	update($t_id,$tname,$C_ID);
	header('Location:insert_tech.php');
}


?>

