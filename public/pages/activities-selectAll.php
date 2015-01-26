<?php
	$return_arr = array();
	$mysqli = new mysqli("localhost", "root", "nermana", "hrmodel");
	$query = "SELECT aktivnosti.naziv,aktivnosti.opis,aktivnosti.kategorija,aktivnosti.datum,aktivnosti.vrijeme, SUBSTRING(datum, 6, 2) mjesec
	FROM aktivnosti";

	if ($result = $mysqli->query($query)) {
		/* fetch associative array */
		while ($row = $result->fetch_assoc()) {
			$return_arr[] = $row;
		}
	}
    $newarr = json_encode($return_arr);//format the array into json data
	echo $newarr;
?>