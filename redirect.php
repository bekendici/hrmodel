
<?php
	session_start();
	if(isset($_POST['edit']))
	{
		header('Location: http://localhost/hrmodel/korisnik_update.php');
		exit;
	}
	if(isset($_POST['odjava']))
	{
		session_unset();
		header('Location: http://localhost/hrmodel/login.php');
		exit;
	}
	if(isset($_POST['promjena_pass']))
	{
		session_unset();
		header('Location: http://localhost/hrmodel/paswordchange.php');
		exit;
	}
?>