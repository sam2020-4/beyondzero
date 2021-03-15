<html>
<head>
<title>donation</title>
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
<!--displays the main content in the page-->
<div class="main">
<h1 style="font-weight:bold;"><font color:green;>DONATION</font></h1>
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
<form action="" method="post">
<table cellpadding="5" cellspacing="3" align="center" style="font-weight:bold"">
<tr><td>Your Name:</td><td><input type="text" name="First_Name" onkeyup="lettersOnly(this)" id="inputs"  placeholder="Enter your Name" required></td>
<td>Your Organization:</td><td><input type="text" name="Orgn" onkeyup="lettersOnly(this)" id="inputs"  placeholder="Enter your Organization" required></td>
</tr>
<tr><td>Your Email:</td><td><input type="email" name="Email" id="inputs"  placeholder="Enter Email" required></td>
<td>Choose Item To Donate:</td><td><select name="Donated_Item" placeholder="choose Item to Donate" required>
<option> <option>Mobile clinic<option>Medical Equipments and Supplies<option>Money<option>Others</select></td>
</tr>
<tr><td>Phone No:</td><td><input type="text" name="Phone_No" onkeyup="numbersOnly(this)" maxlength="12" id="inputs"  placeholder="Enter Phone Number" required></td>
<td>Donation Value:</td><td><input type="text" min="50" name="Don_value" onkeyup="numbersOnly(this)" maxlength="7" id="inputs" placeholder="Enter Donated Amount" required></td>
</tr>
<tr><td>Mode Of Payments:</td><td><select name="Mode_Of_Payment" id="inputs"  placeholder="Enter the Mode of Payment" required><option><option>M-Pesa<option>MasterCard<option>paypal<option>VisaCard</select></td>
<td>DATE:</td><td><textarea name="date" id="demo"></textarea>
<script>
function mydate()
{
	document.getElementById('demo').value=Date();
}
</script></td></tr>
<tr><td>Transaction Code:</td><td><input type="text" name="TCode" maxlength="10" placeholder="Enter the Trancation Code"required></td></tr>
</table><br>
<input type="submit" name="add" value="DONATE" id="send">
<input type="submit" name="delete" value="DELETE" id="delete">
<a href="donationreceipt.php"><input type="button" name="receipt" value="PRINT RECEIPT"></a>
</form><h3>FOR M-PESA DONATION USE TILL NO:<h style="font-family:Times Roman;font-weight:bold;color:red;font-size:22px;">707070</h3>
<?php
//DONATION  BUTTON
 if(isset($_POST['add']))
 {
	require("bzdb.php");
	$First_Name=$_POST["First_Name"];
	$Orgn=$_POST["Orgn"];
	$Email=$_POST["Email"];
	$Donated_Item=$_POST["Donated_Item"];	
	$Don_value=$_POST["Don_value"];
	$Mode_Of_Payment=$_POST["Mode_Of_Payment"];
	$TCode=$_POST["TCode"];
	$Phone_No=$_POST["Phone_No"];
	$date=$_POST["date"];
	
	$query=mysqli_query($con, "insert into Donation values('$First_Name','$Orgn','$Email','$Donated_Item','$Don_value','$Mode_Of_Payment','$TCode','$Phone_No','$date')");
	 
		if($query)
			{
				echo'<p style=color:blue> Thank You, For supporting Us.Your details have been sent Successfuy</p>';
			}
			else
			{
				echo'<p style=color:red>OOPS!!!,Data Not Recorded,please try Again!!</p>';
			}
			
}
//delete button
if(isset($_POST['delete']))
{
	require("bzdb.php");
	$First_Name=$_POST["First_Name"];
	$Orgn=$_POST["Orgn"];
	$Email=$_POST["Email"];
	$Donated_Item=$_POST["Donated_Item"];	
	$Don_value=$_POST["Don_value"];
	$Mode_Of_Payment=$_POST["Mode_Of_Payment"];
	$TCode=$_POST["TCode"];
	$Phone_No=$_POST["Phone_No"];
	$date=$_POST["date"];
	
$query=mysqli_query($con, "delete from Donation where First_Name='".$First_Name."'");
if(mysqli_affected_rows($con)>1)
{
	echo '<p style=color:blue>Data deleted susccessfully</p>';
}
else

mysqli_close($con);
}
?>
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