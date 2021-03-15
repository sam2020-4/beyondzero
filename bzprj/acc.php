<!DOCTYPE html>
<html>
<head>
<title>admin account </title>
<link rel="stylesheet" href="bzstyle2.css" type="text/css" media="all">
</head>
<body>
<div  class="container">
	<div class="header">
	<table width="100%">
	<tr><td><img src="images/images.png" width="200px" height="90px"></td>
	<td><td><p align="center"><font color="white" size="6">BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM</font></p></td>
	<td></td><td><img src="images/images.jpg" width="200px" height="90px"></td></tr>
	</table>
	</div>
	
	<!.....................displays the menu of the system>
	<div id="menu" align="middle" class="nav">
	<table width="100%">
	<tr>
	<td><a href="home.php">HOME</a></td>
	<td><a href="registration.php">REGISTRATION</a></td>
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
	<br>
	<h1 style="font-family:Times Roman;color:georgian;">BEYOND ZERO ADMIN ACCOUNTS FORM</h1>
<p style="color:red;" align="center" >ADMIN REGISTRATION </p>
        <form method="post" action="" onsubmit="return validateform()">  
           <center>
		<table>
		<tr><td>USERNAME:</td><td><INPUT TYPE="text" name="Username" id="required"></td></tr>
		<tr><td>PASSWORD:</td><td><INPUT TYPE="password" name="Pass" maxlength="4" id="required"></td></tr>
		</table>
		<input type="submit" name="submit" value="SUBMIT"><a href="mgtadmin.php"><input type="button" name="back" value="BACK TO ADMIN HOME PAGE"></a>
		</form>	</center><br><br>
<?php
//submit admin 
if(isset($_POST['submit']))
 {
	require("bzdb.php");
	$Username=$_POST["Username"];
	$Pass=$_POST["Pass"];	
	$query=mysqli_query($con, "insert into admintb values('$Username','$Pass')");
	 
		if($query)
			{
				echo'<p style=color:blue> Thank You,your details have registered Successfuy</p>';
			}
			else
			{
				echo'<p style=color:red>Data Not Registered,please try Again!!</p>';
			}
}
?>
	</div>
		<div class="footer" align="middle">
		<footer><br>
		<table width="100%">
		<tr align="center"><td>Copyright &copy 2018 BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM.</td></tr>
		<tr align="center"><td>Programmed by: Matata Samuel, ICT Student at Nys Engineering Institute</td></tr>
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