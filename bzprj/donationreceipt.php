<html>
<head>
<title>donation receipts</title>
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
  
   docprint.document.write('<head><title>BEYOND ZERO CAMPAIGN </title>');
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
<h style="font-size:30px; color:blue">WELCOME FOR SUPPORTING US,GET YOUR RECEIPT HERE</h><br><br>
<form action="" method="post">
<table cellpadding="5" cellspacing="3" align="center" style="font-weight:bold"">
<tr><td>Your Name:</td><td><input type="text" name="First_Name" onkeyup="lettersOnly(this)" id="inputs"  placeholder="Enter your Name" required></td>
<td>Your Email:</td><td><input type="email" name="Email" id="inputs"  placeholder="Enter Email" required></td>
</tr>
</table><br>
<br>
<input name="search" type="submit" value="FIND RECORD" id="send">
<a href="donation.php"><input type="button" name="back" value="GO BACK"></a>
</form>
	
<div class="report" align="center" width="100%">
	<tr><td><input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold" />	
	<div id="divid"></td><center>
	<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br><br>
	<h style="font-weight:bold; color:#000000">BEYOND ZERO CAMPAIGN DONATION RECEIPTS</h></center>
<br>

<?php
//  SEARCH FOR DONORS REPORT
if(isset($_POST['search'])){
	require("bzdb.php");
	$First_Name=$_POST["First_Name"];
	$Email=$_POST["Email"];
	
$query=mysqli_query($con,"select * from Donation Where First_Name ='".$First_Name."' OR Email='".$Email."'") or die("Error in getting data".mysqli_error);
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

<BR><BR><BR><BR><div class="id" align="left" >
<b>SIGNATURE..................</B>
</div>
<div class="id" align="center" >
<h style="font-weight:body color:green;">*****We Thank You for Supporting Us*****</h>
</div>
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