<?php

require 'connect.php';
session_start();
if(isset($_POST['bookflightbutton']))
{
	$flighttype=$_POST['flighttype'];
	
	if($flighttype=="roundtrip")
	{
		$flight1=$_POST['flight1'];
		$flight2=$_POST['flight2'];

		//echo $flight1."-".$flight2;

		$_SESSION['flight1']=$flight1;
		$_SESSION['flight2']=$flight2;

		header("Location: http://localhost/airline/passengerdetails.php");
		exit();
	}
	else if($flighttype=="oneway")
	{
		$flight1=$_POST['flight1'];
		//echo $flight1;

		$_SESSION['flight1']=$flight1;

		header("Location: http://localhost/airline/passengerdetails.php");
		exit();
	}
	
}
?>