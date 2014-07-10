<?php

$mysqli = new mysqli("sulley.cah.ucf.edu", "ju773928", "Knights123!","ju773928");

if ($mysqli->connect_error) 
{
	die('Connect Error ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

?>