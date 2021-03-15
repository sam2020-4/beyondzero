<html>
<head>
<title>donation report</title>
<link rel="stylesheet" href="bzstyle2.css" type="text/css" media="all">
<meta http-equiv="refresh" content=""/>

<script language="javascript">
function PrintMe(DivID) {
var disp_setting="toolbar=yes,location=no,";
disp_setting+="directories=yes,menubar=yes,";
disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
   var content_vlue = document.getElementById(DivID).innerHTML;
   var docprint=window.open("","",disp_setting);
   docprint.document.open();
  
   docprint.document.write('<head><title>BEYOND ZERO CAMPAIGN</title>');
   docprint.document.write('</head><body onLoad="self.print()">');
   docprint.document.write(content_vlue);
   docprint.document.close();
   docprint.focus();
}
</script>

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
	
<div class="main"><center>
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
<h style="font-size:30px; color:red">BEYOND ZERO CAMPAIGN DONATION FIND REPORTS</h><br><br>

<form action="" method="post">
<form action="" method="post">
<table cellpadding="5" cellspacing="3" align="center" style="font-weight:bold"">
<tr><td>Your Name:</td><td><input type="text" name="First_Name" onkeyup="lettersOnly(this)" id="inputs"  placeholder="Enter your Name"></td>
<td>Your Organization:</td><td><input type="text" name="Orgn" onkeyup="lettersOnly(this)" id="inputs"  placeholder="Enter your Organization"></td>
</tr>
<tr><td>Your Email:</td><td><input type="email" name="Email" id="inputs"  placeholder="Enter Email"></td>
<td>Choose Item To Donate:</td><td><select name="Donated_Item" placeholder="choose Item to Donate">
<option> <option>Mobile clinic<option>Medical Equipments and Supplies<option>Money<option>Others</select></td>
</tr>
<tr><td>Phone No:</td><td><input type="text" name="Phone_No" onkeyup="numbersOnly(this)" maxlength="12" id="inputs"  placeholder="Enter Phone Number"></td>
<td>Donation Value:</td><td><input type="text" min="50" name="Don_value" onkeyup="numbersOnly(this)" maxlength="7" id="inputs" placeholder="Enter Donated Amount"></td>
</tr>
<tr><td>Mode Of Payments:</td><td><select name="Mode_Of_Payment" id="inputs"  placeholder="Enter the Mode of Payment" required><option><option>M-Pesa<option>MasterCard<option>paypal<option>VisaCard</select></td>
<td>Date:</td><td><input type="date" name="date" min="2018-09-24" max="2018-09-26"></td></tr>
<tr><td>Transaction Code:</td><td><input type="text" name="TCode" maxlength="10"></td></tr>
</table><br>
<br>
<input name="search" type="submit" value="FIND RECORD" id="send">
<a href="donationREP.php"><input type="button" name="back" value="BACK"></a>
</form>
	
<div class="report" align="center" width="100%">
	<tr><td><input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold" />	
	<div id="divid"><center>
	<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br><br>
	<h style="font-weight:bold; color:#000000">BEYOND ZERO CAMPAIGN DONATION INFORMATION REPORTS</h></center>
<br>	
<?php
//  SEARCH DONATION REPORT
if(isset($_POST['search'])){
	require("bzdb.php");
	$Mode_Of_Payment=$_POST["Mode_Of_Payment"];
	$Donated_Item=$_POST["Donated_Item"];
	
$query=mysqli_query($con,"select * from Donation Where Mode_Of_Payment ='".$Mode_Of_Payment."' OR Donated_Item='".$Donated_Item."'") or die("Error in getting data".mysqli_error);
echo "<table border=1 width=100%>";
echo "<tr><th>First_Name</th><th>Orgn</th><th>Email</th><th>Donated_Item</th><th>Don_value</th><th>Mode_Of_Payment</th><th>TCode</th><th>Phone_No</th><th>datetime</th>";
while($row=mysqli_fetch_array($query))
{
echo "<tr><td>";
echo $row[0];
echo "</td>";
echo "<td>";
echo $row[1];
echo "</td>";
echo "<td>";
echo $row[2];
echo "</td>";
echo "<td>";
echo $row[3];
echo "</td>";
echo "<td>";
echo $row[4];
echo "</td>";
echo "<td>";
echo $row[5];
echo "</td>";
echo "<td>";
echo $row[6];
echo "</td>";
echo "<td>";
echo $row[7];
echo "</td>";
echo "<td>";
echo $row[8];
echo "</td></tr>";
}
echo "</table>";
}
?>
</div>
</div>
</div></center>
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