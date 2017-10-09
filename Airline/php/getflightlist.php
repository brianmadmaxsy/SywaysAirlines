<?php

require 'connect.php';
session_start();

$flighttype=$_SESSION['flighttype'];
if($flighttype=="roundtrip")
{
	$origin=$_SESSION['origin'];
	$destination=$_SESSION['destination'];
	$departuredate=$_SESSION['departuredate'];
	$returndate=$_SESSION['returndate'];
	$numofpassengers=$_SESSION['numofpassengers'];
	
	//echo $origin."-".$destination."-".$departuredate."-".$returndate."-".$numofpassengers."-".$flighttype;
	
	$result = $db->query("SELECT * from flights where origin='".$origin."' AND destination='".$destination."' AND departuredate='".$departuredate."'") or die($db->error);
	$result2 = $db->query("SELECT * from flights where origin='".$destination."' AND destination='".$origin."' AND departuredate='".$returndate."'") or die($db->error);

/*
	if($result)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<br />".$row['id']." ".$row['flightnum']." ".$row['origin']." ".$row['destination']." ".$row['departuredate']." ".$row['departuretime']." ".$row['arrivaltime']." ".$row['duration']." ".$row['fare'];	
		
		}
		$result->free();
	}
	else
	{
		echo "empty";
	}
	
	if($result2)
	{
		while($row = $result2->fetch_assoc())
		{
			echo "<br />".$row['id']." ".$row['flightnum']." ".$row['origin']." ".$row['destination']." ".$row['departuredate']." ".$row['departuretime']." ".$row['arrivaltime']." ".$row['duration']." ".$row['fare'];	
		
		}
		$result2->free();
	}
	else
	{
		echo "empty";
	}
	require 'connect.php';
	$db->close();
*/
}

else if($flighttype="oneway")
{
	$origin=$_SESSION['origin'];
	$destination=$_SESSION['destination'];
	$departuredate=$_SESSION['departuredate'];
	$numofpassengers=$_SESSION['numofpassengers'];
	
	echo $origin."-".$destination."-".$departuredate."-".$numofpassengers."-".$flighttype;
	
	$result = $db->query("SELECT * from flights where origin='".$origin."' AND destination='".$destination."' AND departuredate='".$departuredate."'") or die($db->error);

/*
	if($result)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<br />".$row['id']." ".$row['flightnum']." ".$row['origin']." ".$row['destination']." ".$row['departuredate']." ".$row['departuretime']." ".$row['arrivaltime']." ".$row['duration']." ".$row['fare'];	
		
		}
		$result->free();
	}
	else
	{
		echo "empty";
	}
	$db->close();
*/	
}

?>
