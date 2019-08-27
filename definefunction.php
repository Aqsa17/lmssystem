<?php
function connect(){
	$con = mysqli_connect('localhost','root','','db3',3306)
	or die('error in connection');
	if($con){
	return ($con);
}
else {
	return (null);
}
}
function insert($C_ID,$C_NAME){
	$con=connect();
	if ($con){
		
	$query="INSERT INTO `course`(`C_ID`, `C_NAME`) VALUES ('$C_ID','$C_NAME')";
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


function remove($C_ID){
	$con=connect();
	if($con){
	$query="DELETE FROM course  WHERE C_ID=$C_ID";
	$result=mysqli_query($con,$query);
	if($result){
		echo "data  delete";
		mysqli_close($con);
		
	}
	else{
		mysqli_close($con);
		echo "data not found";
		
	}
}
}
function select(){
	
	$con=connect();
	if($con){
	$query="select C_ID,C_NAME from course";
	$result=mysqli_query($con,$query);
	if($result){
		echo "<center>";
		echo"<table class='t2'>";
		echo "<tr>";
			echo"<th>C_ID</th><th>C_NAME</th><th>EDIT</th><th>DELETE</th>";
			echo "</tr>";
		while($row=mysqli_fetch_assoc($result)){
			echo"<tr>";
			echo "<td>".$row['C_ID']."</td>";
			echo "<td>".$row['C_NAME']."</td>";
			echo "<td><a href='update.php?C_ID=".$row['C_ID']."'>edit</a></td>";
			echo"<td><a href='delete.php?C_ID=".$row['C_ID']."'>delete</a></td>";
			echo"</tr>";
		}
		echo"</table>";
		echo "</center>";
		mysqli_close($con);
}
else {
	mysqli_close($con);
	echo "not selected";
}
		}
}
function update($C_ID,$C_NAME){
	$con=connect();
	if($con){
	$query="UPDATE course  SET C_NAME='$C_NAME' WHERE C_ID=$C_ID";
	$result=mysqli_query($con,$query);
	if($result){
		echo "data update";
		mysqli_close($con);
		
	}
	else{
		mysqli_close($con);
		echo "data not update";
		
	}
}
}

function search($C_ID){
	
	$con=connect();
	if($con){
		
	$query="select C_ID,C_NAME from course where C_ID=$C_ID";
	$result=mysqli_query($con,$query);
		if($result){
			$record=null;
			while($row=mysqli_fetch_assoc($result)){
				$record=$row;
			
		}
		mysqli_close($con);
		return $record;	
	}
	else{
	mysqli_close($con);
		return null;
		
		
	}
	
}
	
}




?>