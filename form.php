<head>
<style>
</style>

</head>

<body bgcolor="tomato">
<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$uname=$_GET['uname'];
$password=$_GET['password'];
$gender=$_GET['gender'];
$email=$_GET['email'];
$cell=$_GET['cell'];
$province=$_GET['province'];
$city=$_GET['city'];
$language=$_GET['language'];
echo "<center>";
echo "<b>"."First Name  :"."</b>".$fname."<hr/>";
echo "<b>"."last Name   :"."</b>".$lname."<hr/>";
echo "<b>"."user Name   :"."</b>".$uname."<hr/>";
echo "<b>"."your password :"."</b>".$password."<hr/>";
if($gender=="male"){
echo "gender is male"."<hr/>";
}
if($gender=="female"){
echo "<b>"."Gender : female"."</b>"."<hr/>";
}
if($gender=="Others"){
echo "<b>"."Gender : Others"."</b>"."<hr/>";
}
echo "<b>"."email :"."</b>".$email."<hr/>";
echo "<b>"."Cell no :"."</b>".$cell."<hr/>";

echo "<b>"."Province :"."</b>".$province."<hr/>";	
echo "<b>"."city:"."</b>".$city."<hr/>";	

if($language){
echo "<h4> your selected language</h4>";
	foreach($language as $value){
		echo "<p>".$value."</p>";
	}
}

echo "</center>";



?></body>