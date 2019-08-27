<?php
include('function_topics.php');
if(isset($_GET['tp_id'])){
$tp_id=$_GET['tp_id'];
$record=search($tp_id);
if ($record!=null){
?>
<form action="update_tp.php">
<input type="number" name="tp_id" value = "<?php echo $record['tp_id'];?>"/>
<br>
<input type="text" name="tp_name" value ="<?php echo $record['tp_name'];?>"/>
<br>
<select  name="C_ID">

<?php
$arr1=fillcourse();
foreach($arr1 as $index=>$row){
	echo "<option value=".$row['C_ID'].">".$row['C_NAME']."</option>";
	
}
?>
</select>
<input type="submit" name="update" value="update"><br>
</form>
<?php
}
}
if(isset($_GET['update'])){
$tp_id=$_GET['tp_id'];
$tp_name=$_GET['tp_name'];
$C_ID=$_GET['C_ID'];
update($tp_id,$tp_name,$C_ID);
header('Location:insert_tp.php');
}



?>




