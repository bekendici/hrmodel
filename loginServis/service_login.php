<?php
	session_start();
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$hashpass = md5($pass);
	
	require_once ("..\\connection.php");
	
	$upit = 'SELECT * FROM korisnici WHERE korisnicko_ime = "'.$user.'" AND lozinka = "'.$hashpass.'"';
	
	$rezultat = mysql_query($upit)or die(mysql_error());
	$zapis = mysql_fetch_array($rezultat);
	if($zapis != null)
	{
		$_SESSION["korisnik"]=$zapis["korisnik_id"];
		header('Location: ..\\public/profile.php');
	}
	else
	{
			/*---------Provjera na nivou baze----------------*/
	
			$upit3 = 'SELECT * FROM korisnici WHERE korisnicko_ime = "'.$user.'"';
			$rezultat3 = mysql_query($upit3)or die(mysql_error());
			$zapis3 = mysql_fetch_array($rezultat3);
			if($zapis3 != null)
			{
				$upit_brojac = 'SELECT loginAttempt FROM korisnici WHERE korisnicko_ime = "'.$user.'"';
				$rezultat_brojac = mysql_query($upit_brojac)or die(mysql_error());
				$zapis_brojac = mysql_fetch_array($rezultat_brojac);
			
				$brojac = $zapis_brojac["loginAttempt"];
				if($brojac < 4)
				{
				$brojac ++;
				$sqlstr3 = 'UPDATE korisnici SET loginAttempt="'.$brojac.'" WHERE korisnik_id = "'.$zapis3["korisnik_id"].'"';
				mysql_query($sqlstr3)or die(mysql_error());
				header("Location: ..\\public/login.html");
				}
				else
				{	
				/*	$datumLock = date('Y-m-d H:i:s');
					echo $datumLock;
					
					$sqlstrLock = 'UPDATE korisnici SET datKljuc="'.$datumLock.'", loginAttempt=0 WHERE korisnik_id = "'.$zapis3["korisnik_id"].'"';
					mysql_query($sqlstrLock)or die(mysql_error()); */
					require_once("mailLock.php");				}
			}
	
			/*---------Provjera na nivou baze----------------*/
			
			
	/*		----------------PROVJERA NA NIVOU APLIKACIJE-------------------
			$upit2 = 'SELECT * FROM korisnici WHERE korisnicko_ime = "'.$user.'"';
			$rezultat2 = mysql_query($upit2)or die(mysql_error());
			$zapis2 = mysql_fetch_array($rezultat2);
			if($zapis2 != null)
			{
			
			if(isset($_SESSION["korisnik"]))
			{
			if($_SESSION["korisnik"]==$zapis2["korisnik_id"])
			{	
				
				if(isset($_SESSION['brojac']))
				{
					$_SESSION['brojac']++;
					if($_SESSION['brojac']>=4)
					{
						echo "pogresni podatci 4 puta";
					}
					//header('Location: http://localhost/hrmodel/login.php');
					print_r($_SESSION["korisnik"]) . "</br>";
					print_r($_SESSION["brojac"]) . "</br>";
				
				}
				else
				{
					$_SESSION['brojac']=2;
				}
			}
			else
			{
				$_SESSION["korisnik"]=$zapis2["korisnik_id"];
				$_SESSION['brojac']=1;
			}
			}
			else
			{
				$_SESSION["korisnik"]=$zapis2["korisnik_id"];
			}
			
			
			
			}
	*/
	
	}
	
?>