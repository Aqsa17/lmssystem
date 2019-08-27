<html>
<head>
<link rel ="stylesheet" href="css/bootstrap.min.css">
<style>
#div1{
	width:100%;
	height:30px;
	background-color:purple;
	border-radius:20px;
	opacity:0.8;
	color:white;
	font-family:forte;
	font-size:25px;
}

li:hover {
	background-color:#ff9999;
	transition:ease-out 2s;
	border-radius:30px;
	
}
table{
	border:2px solid white;
	width:100%;
	height:400px;
}
#chng{
	width:100%;
	height:500px;
	
}
.img-td{
	width:100%;
	height:500px;
}
#title{
	background-color:purple;
	opacity:0.8;
	color:white;
	font-family:forte;
	
}

#radbtn{
	background-color:purple;
	opacity:0.8;
}
#next{
	height:50px;
	border-radius:30px;
	background-color:purple;
	color:white;
	font-family:forte;
	font-size:20px;
}
#prev{
	height:50px;
	border-radius:30px;
	background-color:purple;
	color:white;
	font-family:forte;
	font-size:20px;
}
#start{
	height:50px;
	border-radius:30px;
	background-color:purple;
	color:white;
	font-family:forte;
	font-size:20px;
}
#ft1{
	width:100%;
	height:30px;
	background-color:purple;
	color:white;
	opacity:0.7;
	font-family:forte;
	text-align:center;
	
	
}
body{
background-image:url('images/purple.jpg');
}
</style>
</head>
<body onload="strt()">
<nav class="navbar navbar-inverse" style="background-color:purple;opacity:0.8" >
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="navbar-brand" style="font-family:forte;font-size:25px;color:white">Admin Panel</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="insert.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Course</a>
</li>
<li>
<a href="insert_tech.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Teacher</a>
</li>
<li><a href="insert(std).php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Student</a>
</li>
<li><a href="insert_tp.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Topics</a>
</li>
<li><a href="insert_as.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Assignment</a>
</li>
<li><a href="index.php" style="padding:20px;font-family:forte;text-decoration:none;font-size:20px;color:white">Logout</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- profile php start-->

<?php
session_start();
if(isset($_SESSION['admin']))
{
	$admin=$_SESSION['admin'];
		
echo "<center>";
echo "<div id='div1'>";
echo "<marquee>";
echo "WELCOME Learning Managment System!!!".$admin['name'];
echo "</marquee>";
echo "</center>";
echo "</div>";
}
else{
	header('Location:logout.php');
}
?>

		<!-- slidder start -->
<table>
<tr>
 <td colspan="3">
<center><h1 id="title">learning Managment system</h1></center></td>
</tr>
	<tr>
<td>
<button onclick="prev()" id="prev">Prev</button></td>
<td class="img-td"><img src="images/p4.jpg" id="chng"></td>
<td><button onclick="next()" id="next">Next</button></td>
	</tr>
<tr>
   <td colspan="3" id="radbtn">
   <center>
   <input type="radio" id="rad1" name="checked">
   <input type="radio" id="rad2" name="checked">
   <input type="radio" id="rad3" name="checked">
   <input type="radio" id="rad4" name="checked">
   <input type="radio" id="rad5" name="checked">
   </center>
   </td>
</tr>	
</table>
<script type="text/javascript">
var count=0;
function next(){
	if(count==0){
		document.getElementById('chng').src="images/p1.jpg";
		document.getElementById('title').innerText='image1';
		count++;
		document.getElementById('rad1').checked=true;
	}
	else if(count==1){
		document.getElementById('chng').src="images/p2.jpg";
		document.getElementById('title').innerText='image2';
		count++;
		document.getElementById('rad2').checked=true;
	}
	else if(count==2){
	document.getElementById('chng').src="images/p3.jpg";
		document.getElementById('title').innerText='image3';
		count++;
		document.getElementById('rad3').checked=true;
}
else if(count==3){
	document.getElementById('chng').src="images/p4.jpg";
		document.getElementById('title').innerText='image4';
		count++;
		document.getElementById('rad4').checked=true;
}
else if(count==4){
	document.getElementById('chng').src="images/p5.jpg";
		document.getElementById('title').innerText='image5';
		count=0;
		document.getElementById('rad5').checked=true;
}
}
function prev(){
	if(count==0){
		document.getElementById('chng').src="images/p5.jpg";
	    document.getElementById('title').innerText='image5';
		document.getElementById('rad5').checked=true;
		count=4;
}
else if (count==4){
	    document.getElementById('chng').src="images/p4.jpg";
	    document.getElementById('title').innerText='image4';
		document.getElementById('rad4').checked=true;
		count=3;
}
else if (count==3){
	    document.getElementById('chng').src="images/p3.jpg";
	    document.getElementById('title').innerText='image3';
		document.getElementById('rad3').checked=true;

		count=2;
}
else if (count==2){
	    document.getElementById('chng').src="images/p2.jpg";
	    document.getElementById('title').innerText='image2';
		document.getElementById('rad2').checked=true;

		count=1;
}
else if (count==1){
	    document.getElementById('chng').src="images/p1.jpg";
	    document.getElementById('title').innerText='image1';
		document.getElementById('rad1').checked=true;

		count=0;
}
}
var slidestatus=null;
function strt(){
 if(slidestatus==null){
 	slisestatus=setInterval(next,1000);
 }
}
</script>
	<!-- slidder end -->
<footer id="ft1"> All Right Reserved to @ AQsa Shaikh"</footer>
	</body>
<script type="text/javascript" src="js/jquery.js">
</script>
<script type="text/javascript" src="js/bootstrap.min.js">
</script>

</html>
