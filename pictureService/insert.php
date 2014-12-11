<?php

require_once("..\\connection.php");

$file = $_FILES['image']['tmp_name'];
if (!isset($file) )
	{
		echo "File is not selected";
	}
else
	{
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_size = getimagesize($_FILES['image']['tmp_name']);
		$echo = $_FILES['image'];
		if($image_size==FALSE)
		{
			echo "That is not an image.";
		}
		else
		{
			if(!$insert = mysql_query('UPDATE korisnici SET slika="'.$image.'" WHERE korisnik_id=23'))
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
	
	// http://www.formget.com/ajax-image-upload-php/
?>