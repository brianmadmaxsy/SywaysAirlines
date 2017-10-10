<?php
session_start();

if(isset($_POST['paymentbutton']))
{
	if ($_SESSION['flighttype']=="roundtrip") 
	{
		for($counter=1;$counter<=$_SESSION['numofpassengers'];$counter++)
		{
			

			$flightreservationnum1=$_SESSION['reservationid1'.$counter];
			$flightreservationnum2=$_SESSION['reservationid2'.$counter];
			$status="Payed";
			
			require 'connect.php';
			$stmt = $db->prepare("UPDATE reservation set status=? where reservationid=?");
			$stmt->bind_param("ss",$status,$flightreservationnum1);
			$stmt->execute();
			$db->close();

			require 'connect.php';
			$stmt2 = $db->prepare("UPDATE reservation set status=? where reservationid=?");
			$stmt2->bind_param("ss",$status,$flightreservationnum2);
			$stmt2->execute();
			$db->close();
		}
		header("Location: http://localhost/airline/displayitinerary.php");
		exit();
	}
	elseif ($_SESSION['flighttype']=="oneway") 
	{
		for($counter=1;$counter<=$_SESSION['numofpassengers'];$counter++)
		{
			

			$flightreservationnum1=$_SESSION['reservationid1'.$counter];
			$status="Payed";

			require 'connect.php';
			$stmt = $db->prepare("UPDATE reservation set status=? where reservationid=?");
			$stmt->bind_param("ss",$status,$flightreservationnum1);
			$stmt->execute();
			$db->close();

		}
		header("Location: http://localhost/airline/displayitinerary.php");
		exit();
	}
	
}
?>