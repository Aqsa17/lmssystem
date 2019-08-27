<?php
include('assignment.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	remove($id);
	header('Location:insert_as.php');
}
?>

