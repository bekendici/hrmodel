<?php

	$rijec = $_POST['rijec'];
	
	if($rijec != null)
	{
	
	$dodatak = $rijec . '%';
	
	require_once("..\\connection.php");
	$query = 'SELECT * FROM korisnici WHERE ime LIKE "'.$dodatak.'"';
	$rezultat = mysql_query($query);
	//echo $rezultat;
	//return true;
	$row = mysql_fetch_assoc($rezultat);
	
	while($row = mysql_fetch_assoc($rezultat))
	{
		
		//print_r($row['ime']);
		echo "<br>";
		echo $row['ime'].' '.$row['prezime']."<br>";
	}
	}
?>