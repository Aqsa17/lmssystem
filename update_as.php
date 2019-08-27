<?php
include('assignment.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$record=search($id);
	if($record!=null){
	?>
<form action "update_as.php">
<label>Id</label>
<input type="number" name="id" value="<?php echo $record['id'];?>"/><br>
<label>Title</label>
<input type="text" name="title" value="<?php echo $record['title'];?>"/><br>
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
	$id=$_GET['id'];
	$title=$_GET['title'];
	$C_ID=$_GET['C_ID'];
	update($id,$title,$C_ID);
	header('Location:insert_as.php');
}


?>

