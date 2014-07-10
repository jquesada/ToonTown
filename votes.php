<?php
include 'db_connection.php';

$result=$mysqli->query("SELECT * FROM Votes");

	while ($row=$result->fetch_object())
	{
		$who=$row->CANDIDATE;
		$numvotes=$row->VOTES;
		print "$who $numvotes <br />";
	}
?>
