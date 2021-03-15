<!DOCTYPE html>
<html>
<head>
<title>view members</title>
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

	<div class="main">
<br><br>
<h style="font-size:20px;color:green;">MEMBERS REPORT PREVIEW</h>
<br><br>
<center>
<div class="report" align="center">
<hr>
	<tr><td><a href="membersreport.php"><input type="button" name="find" value="FIND RECORD"></a></td></tr>
	<tr><td><input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold" />
	</td><td><a href="membersrp.php"><input type="button" name="back" value="BACK"></a></td></tr><br>
	<div id="divid"><center>
	<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br>
	<h style="font-weight:bold; color:#000000">BEYOND ZERO CAMPAIGN MEMBERS INFORMATION</h></center>
<br>
<?php
// MEMBERS REPORT
require("bzdb.php");
$query=mysqli_query($con,"select* from reg")or die("error in getting data").mysqli_error;
echo "<table border=1>";
echo "<tr><th>Id_No</th><th>First_Name</th><th>Last_Name</th><th>Gender</th><th>Email</th><th>contact_no</th><th>County</th><th>Username</th><th>Pass</th><th>Cpass</th><th>date</th>";
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
	echo "</td>";
	echo "<td>";
	echo $row[9];
	echo "</td>";
	echo "<td>";
	echo $row[10];
	echo "</td></tr>";
}
echo "</table>";
?>
</div></center>
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