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
function insert($tp_id,$tp_name,$C_ID){
	$con=connect();
	if ($con){
		
	$query="INSERT INTO `topic`(`tp_id`, `tp_name`,`C_ID`) VALUES ('$tp_id','$tp_name','$C_ID')";
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
function remove($tp_id){
	$con=connect();
	if($con){
	$query="DELETE FROM `topic` WHERE tp_id=$tp_id";
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
function update($tp_id,$tp_name,$C_ID){
	$con=connect();
	if($con){
	$query="UPDATE topic SET `tp_name`='$tp_name',`C_ID`=$C_ID WHERE tp_id=$tp_id";
	$result=mysqli_query($con,$query);
	if($result){
		echo "data update";
		mysqli_close($con);
		
	}
	else{
		mysqli_close($con);
		echo "data not update";
		
	}
}}




function select(){
	$con=connect();
	if($con){
$query="select tp_id,tp_name,C_id FROM topic";
$result=mysqli_query($con,$query);
if($result){
	echo "<center>";
		echo "<table class='t2'>";
		echo "<tr>";
		echo "<th>topic ID</th><th>topic name</th><th>course ID</th>
		<th>Edit</th><th>Delete</th>";
		echo"</tr>";
	while($row=mysqli_fetch_assoc($result)){
	
		echo "<tr>";
		echo "<td>".$row['tp_id']."</td>";
		echo "<td>".$row['tp_name']."</td>";
		echo "<td>".$row['C_id']."</td>";
echo "<td><a href='update_tp.php?tp_id=".$row['tp_id']."'>Edit</a></td>";
echo "<td><a href='delete_tp.php?tp_id=".$row['tp_id']."'>delete</a></td>";
echo "</tr>";			
		
	}
	echo"</table>";
	echo "</center>";
	mysqli_close($con);
	}
	else{
		mysqli_close($con);
		echo "not selected";
		}	
	
	}
}
function search($tp_id){
	$con=connect();
	if($con){
$query="select tp_id,tp_name,C_id FROM topic where tp_id=$tp_id ";
$result= mysqli_query($con,$query);
if($result){
	$record=null;
	while($row=mysqli_fetch_assoc($result)){
	$record=$row;
}
mysqli_close($con); 

return $record;
}else{
	mysqli_close($con);
	return null;	
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
			while($row =mysqli_fetch_assoc($result)){
				$arr1[$index]=$row;
				$index++;
			
			}
			mysqli_close($con);
			return $arr1;
		}
	else{
		mysqli_close($con);
			return $null;
		
	}
	}
	
}

function print_topic($C_ID){
$con=connect();
if($con){
	$query="select * from topic where C_ID=$C_ID";
	$result=mysqli_query($con,$query);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
				echo $row['tp_id'];
				echo $row['tp_name'];
				echo $row['C_ID'];
				
			}
		}
		mysqli_close($con);
}}
		

?>