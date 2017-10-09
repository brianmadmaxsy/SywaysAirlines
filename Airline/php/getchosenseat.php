<?php

session_start();

if(isset($_POST['chooseseatbutton']))
{
	$seat=$_POST['seat'];

	$_SESSION['seat']=$seat;

	print_r($_SESSION);
}
?>