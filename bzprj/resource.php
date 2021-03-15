<html>
<head>
<title>resources allocation</title>
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
	<h1 style="font-family:times romans;">ALLOCATION OF RESOURCES DETAILS</h1>
	<br>
	<a href="viewresources.php"><input type="button" name="button" value="VIEW ALL RESOURCES"></a>
	<a href="mgtadmin.php"><input type="button" name="back" value="BACK TO ADMIN HOME PAGE"></a>	
	
	<form action="" method="POST">
	<hr>
	<table cellpadding="5" cellspacing="3" align="center" style="font-weight:bold"">
	<tr>
	<td>ITEM NO:</td><td><input type="text" name="Item_No" onkeyup="numbersOnly(this)" maxlength="4" required></td>
	<td>TYPE Of The Item :</td><td><select name="Item_Type" required><option><option>Mobile Clinic<option>Medicine<option>Equipments<OPTION>Others</td>
	</tr>
	<tr>
	<td>AMOUNT/VALUE:</td><td><input type="text" name="value" min="2000" onkeyup="numbersOnly(this)" maxlength="8" required></td>
	<td>ADDRESS:</td><td><input type="varchar" name="Address" required></td>
	</tr><tr>
	<td>LOCATION:</td><td><input type="text" name="location"  onkeyup="lettersOnly(this)" required></td>
    <td>ASSIGNED DATE:<td><textarea name="Assign_Date" id="demo"></textarea>
<script>
function mydate()
{
	document.getElementById('demo').value=Date();
}
</script></td></tr>
	<tr>
	<td>DESCRIPTION*</td><td>								
				<textarea name="Description" cols="30" rows="4" placeholder="Type item description here" required>	
				</textarea></td>
	</tr></table>
	<br>
	<input type="submit" name="add" value="ALLOCATE" id="add">
	<input type="submit" name="delete" value="DELETE" id="delete">
	<input type="submit" name="update" value="UPDATE" id="update">
	</form>	
<?php
//ALLOCATE RESOURCES
if(isset($_POST['add']))
 {
	require("bzdb.php");
	$Item_No=$_POST["Item_No"];
	$Item_Type=$_POST["Item_Type"];
	$value=$_POST["value"];
	$Assign_Date=$_POST["Assign_Date"];	
	$location=$_POST["location"];
	$Address=$_POST["Address"];
	$Description=$_POST["Description"];

	$query=mysqli_query($con, "insert into allocation values('$Item_No','$Item_Type','$value','$Assign_Date','$location','$Address','$Description')");
	 
		if($query)
			{
				echo'<p style=color:blue> Thank You,Resources details have been sent Successfuy</p>';
			}
			else
			{
				echo'<p style=color:red>OOPS!!!,Data Not Recorded,please try Again!!</p>';
			}
}

//DELETE 
if(isset($_POST['delete']))
{
require("bzdb.php");
	$Item_No=$_POST["Item_No"];
	$Item_Type=$_POST["Item_Type"];
	$value=$_POST["value"];
	$Assign_Date=$_POST["Assign_Date"];	
	$location=$_POST["location"];
	$Address=$_POST["Address"];
	$Description=$_POST["Description"];
	
$query=mysqli_query($con, "delete from allocation where Item_No='".$Item_No."'");
if(mysqli_affected_rows($con)>1)
{
	echo '<p style=color:blue>Data deleted susccessfully</p>';
}
else

mysqli_close($con);
}

//UPDATE RESOURCES
if(isset($_POST['update']))
{
	require("bzdb.php");
	$Item_No=$_POST["Item_No"];
	$Item_Type=$_POST["Item_Type"];
	$value=$_POST["value"];
	$Assign_Date=$_POST["Assign_Date"];	
	$location=$_POST["location"];
	$Address=$_POST["Address"];
	$Description=$_POST["Description"];
	
$query=mysqli_query($con, "update allocation set Item_No='".$Item_No."',Item_Type='".$Item_Type."',value='".$value."',Assign_Date='".$Assign_Date."',location='".$location."',Address='".$Address."',Description='".$Description."' where Item_No='".$Item_No."'");

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