<?php
include('function_std.php');
if(isset($_GET['s_id'])){
$s_id=$_GET['s_id'];
remove($s_id);
header('Location:insert(std).php');
}
?>