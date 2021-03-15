<html>
<head>
<title>contacts</title>
<link rel="stylesheet" href="bzstyle2.css" type="text/css" media="all">
<meta http-equiv="refresh" content=""/>
</head>
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
	
<!.................displays the main content in the page>
	<div class="main">
		<div class="forma" align="center">
			<form action="" method="POST">
<body>	   
<script>
   function lettersOnly(input) {
         var regex = /[^a-z,_whitespace]/gi;
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
				<h2 style="font-weight:bold;color:blue;">Send Us A Message</h2>
				<p>Your comment will be highly appreciated:</p>
				<table align="center">
				<tr>
				<td>Your Name:</td><td><input type="text" name="Name" onkeyup="lettersOnly(this)" maxlength="12" id="inputs"  placeholder="Enter Name" required></td></tr>
				<tr>
				<td>Your Email:</td><td><input type="email" name="Email" id="inputs" placeholder="Enter Email" required></td></tr><br>
				<tr>
				<td>Your Message:</td>
				<td><textarea name="Message" cols="40" rows="8" placeholder="Type your message here" required></textarea></td>
				</tr>
				</table>
				<input type="submit" name="submit" value="Send Message" id="send">
				<input type="submit" name="clear" value="Clear Message" id="clear">	
				</form>

<?php
//send message
if(isset($_POST['submit']))
{
require("bzdb.php");
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Message=$_POST["Message"];
$query=mysqli_query($con,"insert into contact(Name,Email,Message)values('$Name','$Email','$Message')");
if($query){
echo "<p style=color:#0000FF>Message successfully sent</p>";
}
else{
echo"<p style=color:#F20000>Message was not sent, please try again!!!</p>";
}
}
//delete button
if(isset($_POST['clear']))
{
	require("bzdb.php");
	$Name=$_POST["Name"];
	$Email=$_POST["Email"];
	$Message=$_POST["Message"];
	
$query=mysqli_query($con, "delete from contact where Email='".$Email."'");
if(mysqli_affected_rows($con)>1)
{
	echo '<p style=color:blue>Message Cleared</p>';
}
else

mysqli_close($con);
}
?>			
			</div>
				
		<div class="formb">
			<form>
				<h2 style="color:blue;">LET'S GET IN TOUCH</h2>
				<h style="font-weight:bold;color:blue;">Address</h>
				<p>BEYOND ZERO Landmark Plaza,<br> 6<sup>th</sup> Floor, <br>P.O Box 61307-00200.<br>ArgWings Konhek Rd,<br><br> Nairobi-Kenya <p>
				<h style="font-weight:bold;color:blue;">Let's Talk</h>
				<p>+254 714 014 633 <p>
				<h style="font-weight:bold;color:blue;">General Support</h>
				<p>info@beyondzero.or.ke<p><br>
			</form>			
		</div>
		</div>			
<div class="footer" align="middle">
	<footer><small><br>
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