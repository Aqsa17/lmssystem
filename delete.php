<?php

include("definefunction.php");
if(isset($_GET['C_ID'])){
	$C_ID=$_GET['C_ID'];
	remove($C_ID);

header("Location:insert.php");

}

?>