<?php
include("function_topics.php");
if(isset($_GET['tp_id'])){
	$tp_id=$_GET['tp_id'];
	remove($tp_id);
	header('Location:insert_tp.php');
	
}





?>