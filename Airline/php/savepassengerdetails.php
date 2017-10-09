<?php
require 'connect.php';
session_start();

if(isset($_POST['continuebutton']))
{
	$origin=$_SESSION['origin'];
	$destination=$_SESSION['destination'];
	$departuredate=$_SESSION['departuredate'];
	$returndate=$_SESSION['returndate'];
	$numofpassengers=$_SESSION['numofpassengers'];
	$flighttype=$_SESSION['flighttype'];

	if($flighttype=="roundtrip")
	{
		$flight1=$_SESSION['flight1']; //get sessioned flight number of flight1 origin to destination
		$flight2=$_SESSION['flight2']; //get sessioned flight number of flight2 destination return to origin
		if($stmt = $db->prepare("SELECT departuretime,arrivaltime,fare from flights WHERE flightnum=?"))
		{
			//bind parameters for markers
			$stmt->bind_param("s",$flight1);

			//execute query
			$stmt->execute();

			//bind result variables
			$stmt->bind_result($flight1_departuretime,$flight1_arrivaltime,$flight1_fare);
			$stmt->fetch();
			$stmt->close();

		}

		if($stmt2 = $db->prepare("SELECT departuretime,arrivaltime,fare from flights WHERE flightnum=?"))
		{
			//bind parameters for markers
			$stmt2->bind_param("s",$flight2);

			//execute query
			$stmt2->execute();

			//bind result variables
			$stmt2->bind_result($flight2_departuretime,$flight2_arrivaltime,$flight2_fare);
			$stmt2->fetch();
			$stmt2->close();

		}
	}
	elseif ($flighttype=="oneway") 
	{
		$flight1=$_SESSION['flight1']; //get sessioned flight number of flight1 origin to destination (no return flight)
	}
	for($counter=1;$counter<=$_SESSION['numofpassengers'];$counter++)
	{
		//echo $_POST['firstname'.$counter]." ".$_POST['lastname'.$counter]." ".$_POST['month'.$counter]." ".$_POST['day'.$counter]." ".$_POST['year'.$counter]." ".$_POST['address'.$counter]." ".$_POST['nationality'.$counter]." ".$_POST['contact'.$counter]." ".$_POST['baggage'.$counter]."<br />";
		$firstname=$_POST['firstname'.$counter];
		$lastname=$_POST['lastname'.$counter];
		$birthday=$_POST['month'.$counter]."/".$_POST['day'.$counter]."/".$_POST['year'.$counter];
		$address=$_POST['address'.$counter];
		$nationality=$_POST['nationality'.$counter];
		$email=$_POST['email'.$counter];
		$contact=$_POST['contact'.$counter];
		$baggage=$_POST['baggage'.$counter];

		$seat="random";
		$status="reserved";
		//Insert database (Prepared statement)
		//i for integer, d for double, s for string, b for BLOB
		require 'connect.php';
		$stmt = $db->prepare("INSERT INTO reservation(firstname,lastname,birthday,address,nationality,email,contact,baggage,seat,flighttype,origin,destination,departuredate,flightnumber,departuretime,arrivaltime,fare,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssssssssssss",$firstname,$lastname,$birthday,$address,$nationality,$email,$contact,$baggage,$seat,$flighttype,$origin,$destination,$departuredate,$flight1,$flight1_departuretime,$flight1_arrivaltime,$flight1_fare,$status);
		$stmt->execute();
		$db->close();

		require 'connect.php';
		$stmt2 = $db->prepare("INSERT INTO reservation(firstname,lastname,birthday,address,nationality,email,contact,baggage,seat,flighttype,origin,destination,departuredate,flightnumber,departuretime,arrivaltime,fare,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt2->bind_param("ssssssssssssssssss",$firstname,$lastname,$birthday,$address,$nationality,$email,$contact,$baggage,$seat,$flighttype,$destination,$origin,$returndate,$flight2,$flight2_departuretime,$flight2_arrivaltime,$flight2_fare,$status);
		$stmt2->execute();
		$db->close();
		
		echo $_POST['firstname'.$counter]." ".$_POST['lastname'.$counter]." ".$_POST['month'.$counter]."/".$_POST['day'.$counter]."/".$_POST['year'.$counter]." ".$_POST['address'.$counter]." ".$_POST['nationality'.$counter]." ".$_POST['email'.$counter]." ".$_POST['contact'.$counter]." ".$_POST['baggage'.$counter]." ".'random'." ".$flighttype." ".$origin." ".$destination." ".$departuredate." ".$flight1." ".$flight1_departuretime." ".$flight1_arrivaltime." ".$flight1_fare." "."reserved"."<br/>";

		echo $_POST['firstname'.$counter]." ".$_POST['lastname'.$counter]." ".$_POST['month'.$counter]."/".$_POST['day'.$counter]."/".$_POST['year'.$counter]." ".$_POST['address'.$counter]." ".$_POST['nationality'.$counter]." ".$_POST['email'.$counter]." ".$_POST['contact'.$counter]." ".$_POST['baggage'.$counter]." ".'random'." ".$flighttype." ".$destination." ".$origin." ".$returndate." ".$flight2." ".$flight2_departuretime." ".$flight2_arrivaltime." ".$flight2_fare." "."reserved"."<br />";
	}
}
?>
