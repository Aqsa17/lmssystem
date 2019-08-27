<?php
session_start();
if(isset($_SESSION['tech'])){
session_unset();
header("Location:index.php");
}



?>