<?php
include("function_tch.php");
if(isset($_GET['t_id'])){
	$t_id=$_GET['t_id'];
	remove($t_id);
	
	header("Location:insert_tech.php");
	
	
	
	
}








?>
