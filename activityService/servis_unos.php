<?php
	$naziv = $_POST['naziv'];
	$opis = $_POST['opis'];
	$kategorija = $_POST['kategorija'];
	$datum = $_POST['datum'];
	
	require_once("..\\connection.php");
	
	$sqlstr = 'INSERT INTO aktivnosti (naziv, opis, kategorija, datum) VALUE ("'.$naziv.'", "'.$opis.'", "'.$kategorija.'", "'.$datum.'")';
	mysql_query($sqlstr)or die(mysql_error());
	
		echo "Uspjesno";

?>