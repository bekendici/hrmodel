<?php
	$rodjenje_datum = '21/07/2014';
	
	$datum_godina = substr($rodjenje_datum, 0, 2);
	$datum_mjesec = substr($rodjenje_datum, 3, 2);
	$datum_dan = substr($rodjenje_datum, 6, 4);
	
	$rodjenje = strtotime($datum_godina."-".$datum_mjesec."-".$datum_dan);
	
	echo date('Y-m-d', $rodjenje);
?>