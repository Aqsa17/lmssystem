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
function insert($t_id,$tname,$C_ID){
	$con=connect();
	if ($con){
		
	$query="INSERT INTO `teacher`(`t_id`, `tname`,`C_ID`) VALUES ('$t_id','$tname','$C_ID')";
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
function remove($t_id){
	$con=connect();
	if($con){
	$query="DELETE FROM teacher  WHERE t_id=$t_id";
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
function update($t_id,$tname,$C_ID){
	$con=connect();
	if($con){
	$query="UPDATE teacher SET tname='$tname',C_ID=$C_ID WHERE t_id=$t_id";
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
		$query="select t_id,tname,C_ID from teacher";
		$result= mysqli_query($con,$query);
		if($result){
			echo "<center>";
			echo "<table class='t2'>";
			echo "<tr>";
			echo "<th>t_id</th><th>teacher name</th><th>Course_id</th><th>Edit</th><th>Delete</th>";
			echo"</tr>";
		while($row=mysqli_fetch_assoc($result)){
			
			echo "<tr>";
			echo "<td>".$row['t_id']."</td>";
			echo "<td>".$row['tname']."</td>";
			echo "<td>".$row['C_ID']."</td>";
			echo "<td><a href='update_tch.php?t_id=".$row['t_id']."'>edit</a></td>";
			echo "<td><a href='delete_t.php?t_id=".$row['t_id']."'>delete</a></td>";

			echo "</tr>";
		}
			echo "</table>";
			echo "</center>";
		
		mysqli_close($con);
	}
		
		else{
			mysqli_close($con);
			echo "data  not found";	
		}

	}
}

function search($t_id)
{
	$con=connect();
	if($con){
		$query="select t_id,tname,C_ID from teacher where t_id=$t_id";
		$result=mysqli_query($con,$query);
		if($result){
			$record=null;
			while($row =mysqli_fetch_assoc($result)){
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
			return null;
			
		}
}	
}


?>