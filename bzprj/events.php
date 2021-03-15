<html>
<head>
<title>events</title>
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
	<br>
	<h style="font-size:30px; color:#green">BEYOND ZERO CAMPAIGN VIEW SCHEDULE FOR UPCOMING EVENT</h><br><br>
	<table align="center"> 
		<tr>
		<td style="background-color:green;"><a href="ticketbooking.php"><input type="button" name="ticketbooking" value="CLICK FOR TICKET BOOKING"></a></td>
		</tr>
	</table><br><hr width="87%"><center>	
	<h style="font-weight:bold;"VIEW FOR PAST AND UPCOMING EVENTS</h>
<div class="report" align="center">
<?php

// dispay schedule/events view
require("bzdb.php");
$query=mysqli_query($con,"select * from schedule") or die("Error in getting data").mysqli_error;
echo "<table width=100% border=1>";
echo "<tr style=font-weight:bold; color:#000000><th>Event_No</th><th>Event_Name</th><th>Cost</th><th>Date</th><th>Start_time</th><th>End_time</th><th>Venue</th>";
while($row=mysqli_fetch_array($query)){
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
</div></center>	
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