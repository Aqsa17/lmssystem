<?php
function  connect(){
	$con=mysqli_connect('localhost','root','','db3',3306);
	if($con){
	return $con;
	}
else{
	return null;
}	
}
function insert($id,$title,$C_ID){
	$con=connect();
	if($con){
$query="INSERT INTO assignment(`id`, `title`, `C_ID`) VALUES ($id,'$title',$C_ID)";
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
function remove($id){
  $con=connect();
  if($con){
$query="DELETE FROM `assignment` WHERE id=$id";
$result=mysqli_query($con,$query);
if($result){
	echo "data delete";
	mysqli_close($con);
}
	else{
		mysqli_close($con);
		echo "data not delete";
	}}
}
function select(){
	$con=connect();
	if($con){
		$query="SELECT * FROM `assignment`";
		$result=mysqli_query($con,$query);
		if($result){
		echo "<center>";
		echo "<table class='t2'>"; 
		echo "<tr>";
        echo"<th>ID</th><th>Title</th><th>C_ID</th>
        <th>Edit</th><th>Delete</th>";
	    echo"</tr>";
		  while($row=mysqli_fetch_assoc($result)){
			  echo "<tr>";
			  echo "<td>".$row['id']."</td>";
			  echo "<td>".$row['title']."</td>";
			  echo "<td>".$row['C_ID']."</td>";
echo"<td><a href='update_as.php?id=".$row['id']."'>edit</a></td>";
echo"<td><a href='delete_as.php?id=".$row['id']."'>delete</a>
         </td>";	 
echo "</tr>";
		  }
		  echo "</table>";
		  echo "</center>";
		  mysqli_close($con);
		  }
	else{
mysqli_close($con);
 echo "data not selected";	
	}}	
}
function search($id){
$con=connect();
if($con){
$query="select id,title,C_ID from assignment where id=$id";
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
function update($id,$title,$C_ID){
	$con=connect();
		if($con){
$query="UPDATE assignment SET id=$id,title='$title',C_ID=$C_ID WHERE id=$id";
$result=mysqli_query($con,$query);
if($result){
	echo "data updated";
	mysqli_close($con);
}
else{ 
	mysqli_close($con);
	echo "data not updated";
}}
}
function fillcourse(){
$con=connect();
if($con){
$query ="select * from course ";
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

}}


?>