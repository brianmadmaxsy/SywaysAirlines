<?php

//connect.php will initialize a connection to your database which is named 'app'
//you need to call connect.php before initializing a insert,select, update and delete statement/query.

$db = new mysqli('localhost','root','','syways_airlines'); 

if($db->connect_errno)
{
	die("Sorry, there is a problem with your database connection: ".$db->error);
}


?>