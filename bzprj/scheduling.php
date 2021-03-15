<html>
<head>
<title>scheduling of events</title>
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
	<td><a href="events.php">SCHEDULED EVENTS </a></td>
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
		
<h1 style="font-weight:bold;">SCHEDULING FOR EVENTS</h1>
<form action="" method="post">
<table cellpadding="5" cellspacing="2" align="center" style="font-weight:bold; color:#0000FF">
<tr>
<td>EVENT NO:</td><td> <input type="text" name="Event_No" onkeyup="numbersOnly(this)" maxlength="4" required></td>
<td>EVENT NAME:</td><td> <input type="varchar"  name="Event_Name" onkeyup="lettersOnly(this)" required></td>
</tr><tr>
<td>DATE OF EVENT: </td><td><input type="date" name="Date" min="2018-09-26" required></td>
<td>START TIME:</td><td><input type="time" name="Start_time" required></td>
</tr><tr>
<td>COST: </td><td><input type="text" name="Cost" onkeyup="numbersOnly(this)" maxlength="3" required></td>
<td>END TIME: </td><td><input type="time" name="End_time" required></td>
</tr><tr>
<td>VENUE OF EVENT: </td><td><input type="text" name="Venue" onkeyup="lettersOnly(this)" required></td>
</tr>
</table><br>
<tr><td><input name="submit" type="submit" value="SCHEDULE EVENT" id="send"></td>
<td><input name="delete" type="submit" value="DELETE" id="send"></td>
<td><input name="update" type="submit" value="UPDATE" id="send"></td></tr>

<a href="mgtadmin.php"><input type="button" name="back" value="BACK TO ADMIN HOME PAGE"></a>
</form>
	<hr width="60%">
	<center>	
<div class="report" align="center">
<h style="font-size:30px; color:#FFFFFF">WE SHALL BE HAVING THE FOLLOWING EVENTS</h><br><br>
<input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold" /><br>
<div id="divid"><center>
<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br>
<h style="font-weight:bold; color:#000000">BEYOND ZERO CAMPAIGN SCHEDULE INFORMATION</h></center>

<?php 
//schedule/events view
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
echo "</td>";
echo "<td></tr>";
}
echo "</table>";

// SCHEDULING EVENTS
if(isset($_POST['submit']))
 {
	require("bzdb.php");
	$Event_No=$_POST["Event_No"];
	$Event_Name=$_POST["Event_Name"];
	$Cost=$_POST["Cost"];
	$Date=$_POST["Date"];
	$Start_time=$_POST["Start_time"];
	$End_time=$_POST["End_time"];
	$Venue=$_POST["Venue"]; 
	$query=mysqli_query($con, "insert into schedule values('$Event_No','$Event_Name','$Cost','$Date','$Start_time','$End_time','$Venue')");
	 
		if($query)
			{
				echo'<p style=color:blue> Thank You,Events have been added Successfuy</p>';
			}
			else
			{
				echo'<p style=color:red>Events not added,please try Again!!</p>';
			}
}

//delete
if(isset($_POST['delete']))
 {
	require("bzdb.php");
	$Event_No=$_POST["Event_No"];
	$Event_Name=$_POST["Event_Name"];
	$Cost=$_POST["Cost"];
	$Date=$_POST["Date"];
	$Start_time=$_POST["Start_time"];
	$End_time=$_POST["End_time"];
	$Venue=$_POST["Venue"];

	$query=mysqli_query($con, "delete from schedule where Event_No='".$Event_No."'");
if(mysqli_affected_rows($con)>1)
{
	echo '<p style=color:blue>Data deleted susccessfully</p>';
}
else

mysqli_close($con);
}

//update
if(isset($_POST['update']))
 {
	require("bzdb.php");
	$Event_No=$_POST["Event_No"];
	$Event_Name=$_POST["Event_Name"];
	$Cost=$_POST["Cost"];
	$Date=$_POST["Date"];
	$Start_time=$_POST["Start_time"];
	$End_time=$_POST["End_time"];
	$Venue=$_POST["Venue"];
	
$query=mysqli_query($con, "update schedule set Event_No='".$Event_No."',Event_Name='".$Event_Name."',Cost='".$Cost."',Date='".$Date."',Start_time='".$Start_time."',End_time='".$End_time."',Venue='".$Venue."' where Event_No='".$Event_No."'");

if(mysqli_affected_rows($con)>=1)
{
	echo "<p style=color:blue>Data updated susccessfully</p>";
}
else 
{
	echo '<p style=color:blue>Data Failed to update </p>'; 
}
mysqli_close($con);
}
?>
</div>
</div></center>
</div>
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
</div>
</body>
</html>