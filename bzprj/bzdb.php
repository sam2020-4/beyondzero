<?php
	$server='localhost';
	$user='root';
	$pass='';
	$db='bzdb';
	$con=mysqli_connect($server,$user,$pass,$db);
	if(!$con)
	{
		die("server or db not found").mysqli_error;
	}
?>
