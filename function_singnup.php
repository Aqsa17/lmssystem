<?php
function connect(){
	$con = mysqli_connect('localhost','root','','db3',3306)
	or die('error in connection');
	if($con){
	return($con);
}
else {
	return (null);
}
}
function insert($name,$email,$password,$C_ID){
	$con=connect();
	if ($con){
		
	$query="INSERT INTO `signup` (`name`, `email`, `password`, `C_ID`) VALUES ('$name', '$email', '$password', '$C_ID')";
	$result=mysqli_query($con,$query);	
	if($result){
		echo "data inserted";
		mysqli_close($con);
	}
	else{
		mysqli_close($con);
		echo "data not inserted";
		
		
	}}
}

function select(){
$con=connect();
if($con){
	$query="select * from signup";
	$result=mysqli_query($con,$query);
	if($result){
		echo "<center>";
		echo "<table class='t2'>";
		echo "<tr>";
 echo"<th>Name</th><th>Email</th>
      <th>Password</th><th>C_ID</th>";
 echo "</tr>";
		
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td>".$row['C_ID']."</td>";
			echo "</tr>";
		}
			
			echo "</table>";
			echo "</center>";
		mysqli_close($con);
	}
	else{
		mysqli_close($con);
		echo "not selected";
	}
}	
}
function fillcourse(){
	$con=connect();
	if($con){
		$query="select * from course";
		$result=mysqli_query($con,$query);
		if($result){
			$arr1=array();
			$index=0;
			while($row=mysqli_fetch_assoc($result)){
			$arr1[$index]=$row;
            $index++;			
			}
		mysqli_close($con);
		return $arr1;
		}
		else{
		mysqli_close($con);
        return null;		
		}
		
	}
}
?>