<html>
<head>
<style rel="css/stylesheet">
#t1{
	width:800px;
	height:300px;
	color:black;
	
}
</style>
</head>
</html>

<?php
function connect(){
	$con=mysqli_connect('localhost','root','','db3',3306);
	if($con){
		return $con;
	}
		else{
			return null;
		}
	}
	
function insert($id,$title,$C_ID,$s_id,$sname,$value){
	$con=connect();
	if($con){
$query="INSERT INTO submit(id, title,C_ID, s_id, sname,value) VALUES ($id,'$title',$C_ID,'$s_id','$sname','$value')";
	  $result=mysqli_query($con,$query);
	  if($result){
		  echo "<script>alert ('data inserted');</script>";
		  mysqli_close($con);
		  
	  }
	  else{
		  echo "data not inserted";
          mysqli_close($con);		  
	  }
	}
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
/*function fillass(){
	$con=connect();
	if($con){
$query="SELECT id,title FROM `assignment`";
$result=mysqli_query($con,$query);
if($result){
	$arr1=array();
	$index=0;
	while($row=mysqli_fetch_assoc($result)){
		$arr1[$index]=$row;
		$index++;
	}
}
else{
	mysqli_close($con);
	echo "not selected";
}}
}
*/
function search($s_id){
	$con=connect();
	if($con){
		$query="SELECT id,title ,C_ID ,s_id,sname,value FROM `submit`where s_id=$s_id";
		$result =mysqli_query($con,$query);
		$record=null;
		if($result){
		while($row=mysqli_fetch_assoc($result)){
			
		}
		mysqli_close($con);
	}
else {
	mysqli_close($con);
	echo "data not selected"; 
	
	
}}	
}
function select($s_id){
	$con=connect();
	if($con){
$query="SELECT id,title ,C_ID ,s_id,sname,value FROM `submit` where s_id=$s_id";
	$result=mysqli_query($con,$query);
	if($result){
		echo"<center>";
		echo "<table id='t1' border='2px solid purple' bgcolor='tomato' >";
       while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
echo "<td>".'<h2>Student ID:</h2>'."</td>";
echo "<td>".$row['s_id']."<br>"."</td>";
echo "<tr>";
echo "<td>".'<h2>Student Name:</h2>'."</td>";
echo "<td>".$row['sname']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".'<h2>Assignment ID:</h2>'."</td>";
echo "<td>".$row['id']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".'<h2>Assignment Name</h2>'."</td>";
echo "<td>".$row['title']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".'<h2>Course ID:</h2>'."</td>";
echo "<td>".$row['C_ID']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2'>".'<h1  align="center">Assignment</h2>'.$row['value']."<br>"."<a href='file.php'>download</a>"."</td>";

	echo "</tr>";
		}
		echo "</table>";
		echo "</center>";
	}
	
else{
	mysqli_close($con);
	echo "error";
	}}
}

function show_ass($c_id){
	$con=connect();
	$query="SELECT * FROM `submit` WHERE C_ID=$c_id";
	$result=mysqli_query($con,$query);
	if($result){
		echo"<center>";
		echo "<table id='t1' border='2px solid purple' bgcolor='tomato' >";
       while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
echo "<td>".'<h2>Student ID:</h2>'."</td>";
echo "<td>".$row['s_id']."<br>"."</td>";
echo "<tr>";
echo "<td>".'<h2>Student Name:</h2>'."</td>";
echo "<td>".$row['sname']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".'<h2>Assignment ID:</h2>'."</td>";
echo "<td>".$row['id']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".'<h2>Assignment Name</h2>'."</td>";
echo "<td>".$row['title']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".'<h2>Course ID:</h2>'."</td>";
echo "<td>".$row['C_ID']."<br>"."</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2'>".'<h1  align="center">Assignment</h2>'.$row['value']."<br>"."<a href='file.php'>download</a>"."</td>";

	echo "</tr>";
		}
		echo "</table>";
		echo "</center>";
	}
	
else{
	mysqli_close($con);
	echo "error";
	}}


?>