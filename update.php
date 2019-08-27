<?php

include('definefunction.php');
if(isset($_GET['C_ID'])){
	$C_ID=$_GET['C_ID'];
	
	$record=search($C_ID);
	
	if($record!=null){
		
	?>	
<form action="update.php">	
	Course_ID<input type="number"  name="C_ID" value="<?php echo $record['C_ID'];?>"/>	
		</br>
    Course_Name<input type="text"  name="C_NAME" value="<?php echo  $record['C_NAME'];?>"/>	
		</br>
	<input type="submit" value="update" name="ADD">
</form>	
<?php	
	}

}
if(isset($_GET['ADD'])){
	
	$C_ID=$_GET['C_ID'];
	
	$C_NAME=$_GET['C_NAME'];
	
	update($C_ID,$C_NAME);
	
	header('Location:insert.php');
	
}
?>