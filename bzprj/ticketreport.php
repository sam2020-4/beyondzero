<html>
<head>
<title>ticket reports </title>
<link rel="stylesheet" href="bzstyle2.css" type="text/css" media="all">
<meta http-equiv="refresh" content=""/>
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
	</tr>
	</table>
	</div>
<!.................displays the main content in the page>
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
<br>
<h style="font-size:30px; color:#FFFFFF">BEYOND ZERO CAMPAIGN TICKET REPORTS </h><br><br>
<a href="viewtreport.php"><input type="button" name="button" value="VIEW ALL TICKETS"></a>
<a href="mgtadmin.php"><input type="button" name="back" value="BACK"></a>
<hr>
<form action="" method="post">
<table cellpadding="5" cellspacing="3" align="center" style="font-weight:bold; color:blue">
<tr>
<td>TICKET ID:</td><td><select name="Ticket_Id">
<option value="">--choose the approprite Ticket Id--</option>;
<option value="BZC-1" >BZC-1</option>;
<option value="BZC-2" >BZC-2</option>;
</select></td>
<td>SCHEDULE NO:</td><td><select name="Schedule_Id">
<option value="" >--Select Current Schedule Number--</option>;
<option>290
<option>upcoming
</select></td>
<td>Member_Id:</td><td><input type="text" name="Member_Id" onkeyup="numbersOnly(this)" maxlength="8" name="Member_Id" required></td>
</tr>
<tr>
<td>MODE:</td><td><select name="Mode">
<option value="" >--Select Payment Mode--</option>;
<option value="VISACARD">VISACARD</option>;
<option value="MPESA" >MPESA</option>;
<option value="MASTERCARD" >MASTERCARD</option>;
</select></td>
<td>ACCOUNT NO:</td><td><select name="Account_No">
<option value="">--Seect Account No--</option>;
<option value="M-P 707070" > M-P 707070</option>;
<option value="VS 0856732412" >VS 0856732412</option>;
<option value="MC 2345678989" >MC 2345678989 </option>;
</select></td>
<td>AMOUNT:</td><td><input type="text" min="200" name="Amount" onkeyup="numbersOnly(this)" maxlength="6"></td></tr>
<tr><td>TRANSACTION CODE:</td><td><input type="text" name="TCode" maxlength="10"></td></tr>
</table>
<br>
<input type="submit" name="delete" value="DEETE" id="cancel">
<input type="submit" name="update" value="UPDATE" id="update">
</form>
	<center>	
<?php
//delete
if(isset($_POST['delete']))
 {
	require("bzdb.php");
	$Ticket_Id=$_POST["Ticket_Id"];
	$Schedule_Id=$_POST["Schedule_Id"];
	$Member_Id=$_POST["Member_Id"];
	$Mode=$_POST["Mode"];
	$Account_No=$_POST["Account_No"];
	$Amount=$_POST["Amount"];
	$TCode=$_POST["TCode"];	
	
	$query=mysqli_query($con, "delete from tickettb where Member_Id='".$Member_Id."'");
if(mysqli_affected_rows($con)>1)
{
	echo '<p style=color:blue>Data deleted susccessfully</p>';
}
else

mysqli_close($con);
}

//UPDATE TICKET
if(isset($_POST['update']))
 {
require("bzdb.php");
	$Ticket_Id=$_POST["Ticket_Id"];
	$Schedule_Id=$_POST["Schedule_Id"];
	$Member_Id=$_POST["Member_Id"];
	$Mode=$_POST["Mode"];
	$Account_No=$_POST["Account_No"];
	$Amount=$_POST["Amount"];
	$TCode=$_POST["TCode"];
		
$query=mysqli_query($con, "update tickettb set Ticket_Id='".$Ticket_Id."',Schedule_Id='".$Schedule_Id."',Member_Id='".$Member_Id."',Mode='".$Mode."',Account_No='".$Account_No."',Amount='".$Amount."',TCode='".$TCode."' where Member_Id='".$Member_Id."'");

if(mysqli_affected_rows($con)>=1)
{
	echo "<p style=color:blue>Data updated susccessfully</p>";
}

mysqli_close($con);
}
?>
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
