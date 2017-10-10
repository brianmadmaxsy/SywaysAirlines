<?php

session_start();

if(isset($_POST['chooseseatbutton']))
{
	if ($_SESSION['flighttype']=="roundtrip") 
	{
		for($counter=1;$counter<=$_SESSION['numofpassengers'];$counter++)
		{
			$seat1=$_POST['seat1'.$counter];
			$seat2=$_POST['seat2'.$counter];

			$_SESSION['seat1'.$counter]=$seat1;
			$_SESSION['seat2'.$counter]=$seat2;
			if($seat1=="")
			{
				$seat1="random";
			}
			if($seat2=="")
			{
				$seat2="random";
			}

			$flightreservationnum1=$_SESSION['reservationid1'.$counter];
			$flightreservationnum2=$_SESSION['reservationid2'.$counter];
			//echo "<br />".$seat1." ".$seat2;

			require 'connect.php';
			$stmt = $db->prepare("UPDATE reservation set seat=? where reservationid=?");
			$stmt->bind_param("ss",$seat1,$flightreservationnum1);
			$stmt->execute();
			$db->close();

			require 'connect.php';
			$stmt2 = $db->prepare("UPDATE reservation set seat=? where reservationid=?");
			$stmt2->bind_param("ss",$seat2,$flightreservationnum2);
			$stmt2->execute();
			$db->close();

			
		}
		header("Location: http://localhost/airline/payment.php");
		exit();
	}
	elseif ($_SESSION['flighttype']=="oneway") 
	{
		for($counter=1;$counter<=$_SESSION['numofpassengers'];$counter++)
		{
			$seat1=$_POST['seat1'.$counter];
			$_SESSION['seat1'.$counter]=$seat1;
			if($seat1=="")
			{
				$seat1="random";
			}
			

			$flightreservationnum1=$_SESSION['reservationid1'.$counter];
			
			//echo "<br />".$seat1;

			require 'connect.php';
			$stmt = $db->prepare("UPDATE reservation set seat=? where reservationid=?");
			$stmt->bind_param("ss",$seat1,$flightreservationnum1);
			$stmt->execute();
			$db->close();
		}
		
		header("Location: http://localhost/airline/payment.php");
		exit();
	}
	
}
?>