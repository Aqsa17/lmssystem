<?php
include('assignment.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	remove($id);
	header('Location:tech_as.php');
}
?>
