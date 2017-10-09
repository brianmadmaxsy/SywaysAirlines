<?php

session_start();

if(isset($_POST['availbaggagebutton']))
{
	$baggageweight=$_POST['baggage'];

	$_SESSION['baggageweight']=$baggageweight;

	header("Location: http://localhost/airline/chooseseat.php");
	exit();
}
?>