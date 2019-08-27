<html>	
	<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style type='text/css'>
body{
	background-image:url('images/pb.jpg');
}
#logo{
	width:120px;
	height:40px;
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
	background-color:white;
	opacity:0.8;
	color:purple;
	font-family:forte;
	
}

#radbtn{
	background-color:white;
	opacity:0.8;
}
#next{
	height:50px;
	border-radius:30px;
	background-color:white;
	color:purple;
	font-family:forte;
	font-size:20px;
}
#prev{
	height:50px;
	border-radius:30px;
	background-color:white;
	color:purple;
	font-family:forte;
	font-size:20px;
}
#start{
	height:50px;
	border-radius:30px;
	background-color:white;
	color:purple;
	font-family:forte;
	font-size:20px;
}
#ft1{
	width:100%;
	height:30px;
	background-color:white;
	color:purple;
	opacity:0.7;
	font-family:forte;
	text-align:center;
	
	
}

li:hover {
	background-color:#ff9999;
	transition:ease-out 1s;
	border-radius:30px;
	
}
</style>
 	
	</head>
<body onload="strt()">
<nav class="navbar navbar-inverse" 
style="background-color:white;opacity:0.8">
<div class="container">
 <div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    		 	  	 <span class="icon-bar"></span>
    		 	  	 <span class="icon-bar"></span>
    		 	  	 <span class="icon-bar"></span>
    		 	  </button>
<a href="#" class="navbar-brand"><img src="images/log.png" id="logo"></a>
</div>				  
<div class="navbar-collapse collapse">
            	 <ul class="nav navbar-nav navbar-right">
     <li> <a  href="admin_login.php"
style="text-decoration:none;font-family:forte; font-size:20px;color:purple;padding:20px">Admin</a>
</li>
<li><a href="login_tech.php" 
style="text-decoration:none;font-family:forte; font-size:20px;color:purple;padding:20px">Teacher</a></li>
<li><a  href="std_page.php" 
style="text-decoration:none;font-family:forte; font-size:20px;color:purple;padding:20px">Student</a></li>
</ul>
      
    </div>
  </div>
    </nav>

<table>
<tr>
 <td colspan="3">
<center><h1 id="title">learning Managment system</h1></center></td>
</tr>
	<tr>
<td>
<button onclick="prev()" id="prev">Prev</button>
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html> 