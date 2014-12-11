<?php
	$telefon = $_POST['telefon'];
	$grad = $_POST['grad'];
	$adresa = $_POST['adresa'];
	$slika = $_FILES['slika']['tmp_name'];
	
	require_once ("..\\connection.php");
	session_start();
	
	/*-----------------------Skripta za sliku-------------------------*/
	
	$file = $_FILES['slika']['tmp_name'];

	if (!isset($file) )
	{
		echo "File is not selected";
	}
	else
	{
		$image = addslashes(file_get_contents($_FILES['slika']['tmp_name']));
		$image_size = getimagesize($_FILES['slika']['tmp_name']);
		if($image_size==FALSE)
		{
			echo "That is not an image.";
		}
		else
		{
			if(!$insert = mysql_query('UPDATE korisnici SET slika="'.$image.'" WHERE korisnik_id = "'.$_SESSION['korisnik'].'"'))
			{
				echo "Problem uploading image.";
			}
			else
			{
				echo "Success!<br>";
				echo "Image uploaded.<p />Your image:<p /><img src=get.php>";
			}
		}
	}
	
	/*-----------------------Skripta za sliku-------------------------*/
	
	
	

	
	
	$strtel = 'SELECT * FROM korisnici WHERE korisnik_id = "'.$_SESSION['korisnik'].'"';
	$rezultat = mysql_query($strtel)or die(mysql_error());
	$rez = mysql_fetch_array($rezultat);
	
	$sqlstr2 = 'UPDATE korisnici SET telefon="'.$telefon.'", grad_id="'.$grad.'", adresa="'.$adresa.'" WHERE korisnik_id = "'.$_SESSION['korisnik'].'"';
	mysql_query($sqlstr2)or die(mysql_error());
	echo "USPJESNO!!!";
?>