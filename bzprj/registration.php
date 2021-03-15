<!DOCTYPE html>
<html>
<head>
<title>registration</title>
<link rel="stylesheet" href="bzstyle2.css" type="text/css" media="all">
<meta http-equiv="refresh" content=""/>
</head>
<body onclick="mydate()">
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
<body>	   
    <script>
   function lettersOnly(input) {
         var regex = /[^a-z,_]/gi;
		 input.value = input.value.replace(regex, "");   
}
</script>
<script>
   function numbersOnly(input) {
         var regex = /[^0-9]/gi;
		 input.value = input.value.replace(regex, "");   
}
</script>
</body>
<br><br>
<h style="font-size:30px;color:green;">MEMBER REGISTRATION FORM</h>
<br><br>
<form action="" method="post">
<table cellpadding="5" cellspacing="2" align="center" style="font-weight:bold; color:blue">
<tr><tr><td>ID NO:</td><td><input type="text" name="Id_No" min="1" onkeyup="numbersOnly(this)" maxlength="8" required></td></tr>
<tr>
<td>FIRST NAME:</td><td><input type="text" name="First_Name" onkeyup="lettersOnly(this)" required></td>
<td>USER NAME:</td><td><input type="text" name="Username" required></td>
</tr>
<tr><td>LAST NAME:</td><td><input type="text" name="Last_Name" onkeyup="lettersOnly(this)" required></td>
<td>EMAIL ADDRESS:</td><td><input type="email" name="Email" required></td>
</tr>
<tr><td>CONTACT NO:</td><td><input type="text" name="Contact_No" onkeyup="numbersOnly(this)" maxlength="13"  required></td>
<td>PASSWORD:</td><td><input type="password" name="Pass" maxlength="4" required></td>
</tr>
<tr><td>GENDER:</td><td><select name="Gender" required><option><option>Male<option>Female</td>
<td>CONFIRM PASSWORD:</td><td><input type="password" name="Cpass" maxlength="4" required></td>
</tr>
<tr><td>COUNTY:</td><td><input type="text" name="County" onkeyup="lettersOnly(this)" required></td>
<td>DATE:</td><td><textarea name="date" id="demo"></textarea>
<script>
function mydate()
{
	document.getElementById('demo').value=Date();
}
</script></td></tr>
</table>
<br>
<input type="submit" name="submit" value="Register" id="send">
</form>
<br>
<?php
 if(isset($_POST['submit']))
 {
	require("bzdb.php");
	$Id_No=$_POST["Id_No"];
 	$First_Name=$_POST["First_Name"];
	$Last_Name=$_POST["Last_Name"];
	$Gender=$_POST["Gender"];
	$Email=$_POST["Email"];
	$Contact_No=$_POST["Contact_No"];
	$County=$_POST["County"];
	$Username=$_POST["Username"];
	$Pass=$_POST["Pass"];	
	$Cpass=$_POST["Cpass"];	
	$date=$_POST["date"];
	
	if($Pass==$Cpass)
	{
	$query=mysqli_query($con, "insert into reg values('$Id_No','$First_Name','$Last_Name','$Gender','$Email','$Contact_No','$County','$Username','$Pass','$Cpass','$date')");
	 
		if($query)
			{
				echo'<p style=color:blue> Thank You,your details have registered Successfuy</p>';
			}
			else
			{
				echo'<p style=color:red>Data Not Registered,please try Again!!</p>';
			}
	}
	else 
	{
		echo "<p style=color:red>incorrect Entry or password and confirm password does not match,please try Again!!</p>";
	}
}
?>
</div>
		<div class="footer" align="middle">
		<footer><br>
		<table width="100%">
		<tr align="center"><td>Copyright &copy 2018 BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM.</td></tr>
		<tr align="center"><td>Programmed by: Matata Samuel (ICT Student at Nys Engineering Institute</td></tr>
		<tr align="center"><td><a href="#">Terms and conditions</a> | <a href#Privacy</a></td></tr>
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