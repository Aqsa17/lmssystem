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
function insert($s_id,$sname,$C_ID){
	$con=connect();
	if ($con){
		
	$query="INSERT INTO student(s_id, sname, C_ID) VALUES ($s_id,'$sname',$C_ID)";
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

function remove($s_id){
	$con=connect();
	if($con){
	$query="DELETE FROM student  WHERE s_id=$s_id";
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
function update($s_id,$sname,$C_ID){
	$con=connect();
	if($con){
	$query="UPDATE student SET sname='$sname',C_ID=$C_ID WHERE s_id=$s_id";
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

function select(){
	
	$con=connect();
	if ($con){
		$query="select s_id,sname,C_ID from student";
		$result=mysqli_query($con,$query);
		if($result){
			echo "<center>";
			echo  "<table class='t2'>";
			echo "<tr>";
			echo"<th>s_id</th><th>s_name</th><th>course_id</th><th>edit</th><th>delete</th>";
			echo "</tr>";
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row['s_id']."</td>";
				echo "<td>".$row['sname']."</td>";
				echo "<td>".$row['C_ID']."</td>";
			  echo "<td><a href='update(std).php?s_id=".$row['s_id']."'>Edit</a></td>";
				echo "<td><a href='delete(std).php?s_id=".$row['s_id']."'>delete</a></td>";
				echo"</tr>";
				
				
			}
			
			echo"</table>";
			echo "</center>";
			mysqli_close($con);
			
		}
		else{
			mysqli_close($con);
			echo"not found";
			
			
		}
	}
}

function search($s_id){
	$con=connect();
	if($con){
		$query="select sname,s_id,C_ID from student where s_id=$s_id";
		$result =mysqli_query($con,$query);
		$record=null;
		if($result){
		while($row=mysqli_fetch_assoc($result)){
			$record=$row;
		}
		mysqli_close($con);
		return $record;
	}
else {
	mysqli_close($con);
	return null;	
	
}}	
}
function fillcourse(){
	$con=connect();
	if($con){
		$query="select * from course";
		$result = mysqli_query($con,$query);
		if($result){
			$arr1=array();
			$index=0;
			
			while($row = mysqli_fetch_assoc($result)){
				$arr1[$index]=$row;
				$index++;	
			}
mysqli_close($con);
return $arr1;
			
		}
		else{
			
			mysqli_close($con );
			return null ;
		}}
}







?>