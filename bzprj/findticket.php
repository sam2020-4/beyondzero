<html>
<head>
<title>find ticket</title>
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
<input name="search" type="submit" value="FIND RECORD" id="send"><a href="viewtreport.php"><input type="button" name="back" value="BACK"></a>
</form>
	<center>	
<hr width="87%">	
<div class="report" align="center">
	<tr><td><input type="button"  name="btnprint" onClick="PrintMe('divid')" value="Print Details" style="font-weight:bold"/>	
	<div id="divid"><center>
	<tr><td><img src="images/images.jpg" height="80" width="300"></td></tr><br><br>
	<h style="font-weight:bold; color:#000000">BEYOND ZERO CAMPAIGN TICKET INFORMATION REPORT</h></center>
<br>	
<?php 
//  SEARCH TICKET REPORT
if(isset($_POST['search'])){
	require("bzdb.php");
	$Mode=$_POST["Mode"];
	$Member_Id=$_POST["Member_Id"];
	
$query=mysqli_query($con,"select * from tickettb Where Member_Id='".$Member_Id."'") or die("Error in getting data".mysqli_error);
echo "<table border=1 width=100%>";
echo "<tr style=font-weight:bold; color:#000000><th>Ticket_Id</th><th>Schedule_Id</th><th>Member_Id</th><th>Mode</th><th>Account_No</th><th>Amount</th><th>TCode</th>";
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
}
?>
</div>
</div></center>
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
		