<!DOCTYPE html>
<html>
<head>
<title>members report</title>
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
<h style="font-size:30px; color:red">BEYOND ZERO  MEMBERS  INFORMATION REPORTS</h><br><br>
<form action="" method="post">
<table cellpadding="5" cellspacing="2" align="center" style="font-weight:bold; color:blue">
<tr><tr><td>ID NO:</td><td><input type="text" name="Id_No" min="1" onkeyup="numbersOnly(this)" maxlength="8"></td>
<td>FIRST NAME:</td><td><input type="text" name="First_Name" onkeyup="lettersOnly(this)"></td>
<td>LAST NAME:</td><td><input type="text" name="Last_Name" onkeyup="lettersOnly(this)"></td></tr>

<tr><td>GENDER:</td><td><select name="Gender"><option><option>Male<option>Female</td>
<td>COUNTY:</td><td><input type="text" name="County" onkeyup="lettersOnly(this)" required></td>
<td>DATE:</td><td><textarea name="date" id="demo"></textarea>
<script>
function mydate()
{
	document.getElementById('demo').value=Date();
}
</script></td></tr>
</table>
<br>
<td><input name="search" type="submit" value="FIND RECORD" id="send"></td>
<td><a href="membersrp.php"><input type="button" name="back" value="BACK"></a></td>
</form>
<center>
<div class="report">
<hr>
	<input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold" /><br>
	<div id="divid"><center>
	<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br>
	<h style="font-weight:bold; color:#000000">BEYOND ZERO CAMPAIGN MEMBERS INFORMATION</h></center>
<br>
<?php
//  SEARCH MEMBERS REPORT
if(isset($_POST['search'])){
	require("bzdb.php");
	$Id_No=$_POST["Id_No"];
	$First_Name=$_POST["First_Name"];
	$Last_Name=$_POST["Last_Name"];
	$Gender=$_POST["Gender"];
	$County=$_POST["County"];
	$date=$_POST["date"];
$query=mysqli_query($con,"select * from reg Where Id_No ='".$Id_No."' OR First_Name='".$First_Name."' OR Last_Name='".$Last_Name."' OR Gender='".$Gender."' OR County='".$County."' OR date='".$date."'") or die("Error in getting data".mysqli_error);
echo "<table border=1>";
echo "<tr style=font-weight:bold><td>Id_No</td><td>First_Name</td><td>Last_Name</td><td>Gender</td><td>Email</td><td>Contact_No</td><td>County</td><td>date</td>";
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
echo "</td>";
echo "<td>";
echo $row[7];
echo "</td></tr>";
}
echo "</table>";
}
?>
<br><br>
</div></center>
</div>
	<div class="footer" align="middle">
		<footer><small><br>
		<table width="100%">
		<tr align="center"><td>Copyright &copy 2018 BEYOND ZERO CAMPAIGN MANAGEMENT SYSTEM.</td></tr>
		<tr align="center"><td>Developed & Programmed by: Matata Samuel (ICT Student at Nys Engineering Institute</td></tr>
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