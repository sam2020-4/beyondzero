<html>
<head>
<title> view resources</title>
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
	<h1 style="font-family:times romans;">ALLOCATION OF RESOURCES DETAILS</h1>
	<br><a href="findresource.php"><input name="search" type="submit" value="FIND RECORD" id="send">
	<a href="resource.php"><input type="button" name="back" value="BACK TO ADMIN HOME PAGE"></a>
	
	
	<center>
	<div class="report" align="center">
	<hr width="60%">
	<tr><td><input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold"/></td>
	<div id="divid"><center>
	<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br>
	<h style="font-weight:bold;">ALLOCATION OF RESOURCES REPORT</h>
<?php
// MEMBERS REPORT
require("bzdb.php");
$query=mysqli_query($con,"select* from allocation")or die("error in getting data").mysqli_error;
echo "<table border=1>";
echo "<tr><th>Item_No</th><th>Item_Type</th><th>value</th><th>Assign_Date</th><th>location</th><th>Address</th><th>Description</th>";
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
	echo "</td></tr>";
}
echo "</table>";
?>
	</div>
	</div>
	<div class="footer" align="middle">
	<footer><small><br>
		<table width="100%">
		<tr align="center"><td>Copyright &copy 2018 BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM.</td></tr>
		<tr align="center"><td>Developed & Programmed by: Matata Samuel, ICT Student at Nys Engineering Institute</td></tr>
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