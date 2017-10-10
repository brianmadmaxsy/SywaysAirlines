<?php
require 'connect.php';
session_start();

if(isset($_POST['continuebutton']))
{
	$transactionid = $reservationid1=bin2hex(mcrypt_create_iv(10, MCRYPT_DEV_URANDOM));
	$_SESSION['transactionid']=$transactionid;

	$origin=$_SESSION['origin'];
	$destination=$_SESSION['destination'];
	$departuredate=$_SESSION['departuredate'];
	$numofpassengers=$_SESSION['numofpassengers'];
	$flighttype=$_SESSION['flighttype'];

	if($flighttype=="roundtrip")
	{

		$returndate=$_SESSION['returndate'];
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
		if($flighttype=="roundtrip")
		{
			require 'connect.php';
			$reservationid1=bin2hex(mcrypt_create_iv(10, MCRYPT_DEV_URANDOM));
			$stmt = $db->prepare("INSERT INTO reservation(reservationid,transactionid,firstname,lastname,birthday,address,nationality,email,contact,baggage,seat,flighttype,origin,destination,departuredate,flightnumber,departuretime,arrivaltime,fare,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssssssssssssss",$reservationid1,$transactionid,$firstname,$lastname,$birthday,$address,$nationality,$email,$contact,$baggage,$seat,$flighttype,$origin,$destination,$departuredate,$flight1,$flight1_departuretime,$flight1_arrivaltime,$flight1_fare,$status);
			$stmt->execute();
			$db->close();

			$reservationid2=bin2hex(mcrypt_create_iv(10, MCRYPT_DEV_URANDOM));
			require 'connect.php';
			$stmt2 = $db->prepare("INSERT INTO reservation(reservationid,transactionid,firstname,lastname,birthday,address,nationality,email,contact,baggage,seat,flighttype,origin,destination,departuredate,flightnumber,departuretime,arrivaltime,fare,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt2->bind_param("ssssssssssssssssssss",$reservationid2,$transactionid,$firstname,$lastname,$birthday,$address,$nationality,$email,$contact,$baggage,$seat,$flighttype,$destination,$origin,$returndate,$flight2,$flight2_departuretime,$flight2_arrivaltime,$flight2_fare,$status);
			$stmt2->execute();
			$db->close();
			

			$_SESSION['reservationid1'.$counter]=$reservationid1;
			$_SESSION['reservationid2'.$counter]=$reservationid2;
			$_SESSION['firstname'.$counter]=$firstname;
			$_SESSION['lastname'.$counter]=$lastname;
			$_SESSION['birthday'.$counter]=$birthday;
			$_SESSION['passengeraddress'.$counter]=$address;
			$_SESSION['nationality'.$counter]=$nationality;
			$_SESSION['email'.$counter]=$email;
			$_SESSION['contact'.$counter]=$contact;
			$_SESSION['baggage'.$counter]=$baggage;

			$_SESSION['flight1_departuretime']=$flight1_departuretime;
			$_SESSION['flight1_arrivaltime']=$flight1_arrivaltime;
			$_SESSION['flight1_fare']=$flight1_fare;
			$_SESSION['flight2_departuretime']=$flight2_departuretime;
			$_SESSION['flight2_arrivaltime']=$flight2_arrivaltime;
			$_SESSION['flight2_fare']=$flight2_fare;


			
			/*
			echo $reservationid1." ".$firstname." ".$lastname." ".$birthday." ".$address." ".$nationality." ".$email." ".$contact." ".$baggage." ".'random'." ".$flighttype." ".$origin." ".$destination." ".$departuredate." ".$flight1." ".$flight1_departuretime." ".$flight1_arrivaltime." ".$flight1_fare." "."reserved"."<br/>";

			echo $reservationid2." ".$firstname." ".$lastname." ".$birthday." ".$address." ".$nationality." ".$email." ".$contact." ".$baggage." ".'random'." ".$flighttype." ".$destination." ".$origin." ".$returndate." ".$flight2." ".$flight2_departuretime." ".$flight2_arrivaltime." ".$flight2_fare." "."reserved"."<br />";
			*/
		}
		elseif ($flighttype=="oneway") 
		{
			require 'connect.php';
			$reservationid1=bin2hex(mcrypt_create_iv(10, MCRYPT_DEV_URANDOM));
			$stmt = $db->prepare("INSERT INTO reservation(reservationid,transactionid,firstname,lastname,birthday,address,nationality,email,contact,baggage,seat,flighttype,origin,destination,departuredate,flightnumber,departuretime,arrivaltime,fare,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssssssssssssss",$reservationid1,$transactionid,$firstname,$lastname,$birthday,$address,$nationality,$email,$contact,$baggage,$seat,$flighttype,$origin,$destination,$departuredate,$flight1,$flight1_departuretime,$flight1_arrivaltime,$flight1_fare,$status);
			$stmt->execute();
			$db->close();

			$_SESSION['reservationid1'.$counter]=$reservationid1;
			$_SESSION['firstname'.$counter]=$firstname;
			$_SESSION['lastname'.$counter]=$lastname;
			$_SESSION['birthday'.$counter]=$birthday;
			$_SESSION['passengeraddress'.$counter]=$address;
			$_SESSION['nationality'.$counter]=$nationality;
			$_SESSION['email'.$counter]=$email;
			$_SESSION['contact'.$counter]=$contact;
			$_SESSION['baggage'.$counter]=$baggage;

			$_SESSION['flight1_departuretime']=$flight1_departuretime;
			$_SESSION['flight1_arrivaltime']=$flight1_arrivaltime;
			$_SESSION['flight1_fare']=$flight1_fare;
			
			
			//echo $reservationid1." ".$firstname." ".$lastname." ".$birthday." ".$address." ".$nationality." ".$email." ".$contact." ".$baggage." ".'random'." ".$flighttype." ".$origin." ".$destination." ".$departuredate." ".$flight1." ".$flight1_departuretime." ".$flight1_arrivaltime." ".$flight1_fare." "."reserved"."<br/>";
		}
		
	}
	header("Location: http://localhost/airline/chooseseat.php");
	exit();
}
?>
