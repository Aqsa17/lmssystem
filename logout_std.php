<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
</html>
<?php
session_start();
if(isset($_SESSION['std'])){
	session_unset();
header('Location:index.php');
}

?>