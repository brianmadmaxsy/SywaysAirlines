<?php

if(isset($_POST['bookflightbutton']))
{
	if($_POST['flighttype']=="roundtrip")
	{
		$origin=$_POST['origin'];
		$destination=$_POST['destination'];
		$departuredate=$_POST['departure'];
		$returndate=$_POST['return'];
		$numofpassengers=$_POST['passengers'];
		$flighttype=$_POST['flighttype'];

		//echo $origin."-".$destination."-".$departuredate."-".$returndate."-".$numofpassengers."-".$flighttype;

		session_start();
		$_SESSION['origin']=$origin;
		$_SESSION['destination']=$destination;
		$_SESSION['departuredate']=$departuredate;
		$_SESSION['returndate']=$returndate;
		$_SESSION['numofpassengers']=$numofpassengers;
		$_SESSION['flighttype']=$flighttype;

		//print_r($_SESSION);
		header("Location: http://localhost/airline/chooseflight.php"); /* Redirect browser */
		//header("Location: http://localhost/airline/php/getflightlist.php");
		exit();
	}
	else if($_POST['flighttype']=="oneway")
	{
		$origin=$_POST['origin'];
		$destination=$_POST['destination'];
		$departuredate=$_POST['departure'];
		$numofpassengers=$_POST['passengers'];
		$flighttype=$_POST['flighttype'];

		//echo $origin."-".$destination."-".$departuredate."-".$numofpassengers."-".$flighttype;
		session_start();
		$_SESSION['origin']=$origin;
		$_SESSION['destination']=$destination;
		$_SESSION['departuredate']=$departuredate;
		$_SESSION['numofpassengers']=$numofpassengers;
		$_SESSION['flighttype']=$flighttype;

		//print_r($_SESSION);
		header("Location: http://localhost/airline/chooseflight.php"); /* Redirect browser */
		//header("Location: http://localhost/airline/php/getflightlist.php");
		exit();
	}
	
}
?>