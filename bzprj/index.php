<!doctype html>
<html>
<head>
<title>beyondzero</title>
<link rel="stylesheet" href="bzstyle2.css" type="text/css" media="all">
<meta http-equiv="refresh" content=""/>
</head>
<body>

<div  class="container">
	<div class="header">
	<table width="100%">
	<tr><td><img src="images/images.png" width="200px" height="90px"></td>
	<td><td><p align="center"><font color="white" size="6">BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM</font></p></td>
	<td></td><td></td><td><img src="images/images.jpg" width="200px" height="90px"></td></tr>
	</table>
	</div>
	
	<!.....................displays the menu of the system>
	<div id="menu" align="middle" class="nav">
	<table width="100%">
	<tr>
	<td><a href="home.php">HOME</a></td>
	<td><a href="events.php">EVENTS SCHEDULING</a></td>
	<td><a href="accesslogin.php">DONATION</a></td>		
	<td><a href="mgt.php">MANAGEMENT</a></td>
	<td><a href="aboutus.php">ABOUT US</a></td>
	<td><a href="contacts.php">CONTACTS</a></td>
	<td><a href="index.php">LOG OUT</a></td>
	</tr>
	</table>
	</div>
	<div class="main"> 
	<center>
	<div class="login2">
	<h1 style="color:blue;">LOG IN TO ACCESS THE SYSTEM</h1>
	<form name="myform" method="post" action="" onsubmit="return validateform()">  
		<table>
		<tr><td>USERNAME:</td><td><INPUT TYPE="text" name="Username" id="required"></td></tr>
		<tr><td>PASSWORD:</td><td><INPUT TYPE="password" name="Pass" id="required"></td></tr>
		</table>
		<input type="submit" name="login" value="LOGIN"><br>
		<p>I'm a New Member <a href="registration.php">CLICK HERE</p>
		</form>	</center>
<?php
if(isset($_POST["login"]))
{
require("bzdb.php");
$Username=$_POST['Username'];
$Pass=$_POST['Pass'];
$query=mysqli_query($con,"SELECT Username and Pass from reg where Username='".$Username."'and Pass='".$Pass."'");
if(!$query)
{
echo'Could not get data:'.mysqli_error();
}

if($rows=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
//$_SESSION['loggedin']='YES';
header("Location:home.php");
}
$rows=mysqli_num_rows($query);
if($rows>=0)
{
echo("<p style=color:#F20000>Username or Password used is incorrect,Please Try Again!!!</p>");
}
mysqli_close($con);
}
?>				
	</div
   </div></center>
<div class="footer" align="middle">
		<footer><small><br>
		<table width="100%">
		<tr align="center"><td>Copyright &copy 2018 BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM.</td></tr>
		<tr align="center"><td>Programmed by: Matata Samuel (ICT Student at Nys Engineering Institute</td></tr>
		<tr align="center"><td><a href="#">Terms and conditions</a> | <a href="#">Privacy</a></td></tr>
		<tr align="right"><td><a href="https://www.facebook.com/pages/"><image src="images/f.jpg" width="30px" height="30px"></a>
		<a href="https://twitter.com/"><image src="images/t.jpg" width="30px" height="30px"></a>
		<a href="https://www.instagram.com/accounts/login/"><image src="images/inst.jpg" width="30px" height="30px"></a>
		<a href="https://www.youtube.com/"><image src="images/yy.jpg" width="30px" height="30px"></a>
		</td></tr></table>
	</footer>
	</div>
</div>
</body>
</html>