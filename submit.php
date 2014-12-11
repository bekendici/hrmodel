<?php
	if(isset($_POST['login']))
	{
		header('Location: http://localhost/hrmodel/login.php');
		exit;
	}
	if(isset($_POST['registracija']))
	{
		header('Location: http://localhost/hrmodel/korisnik_unos.php');
		exit;
	}
?>