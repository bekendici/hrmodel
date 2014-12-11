<form name ="input" action="registrationService/service_unos.php" method="post">
ime: <input type="text" name="ime"/> </br>
prezime: <input type="text" name="prezime"/> </br>
user: <input type="text" name="korisnickoime"/> </br>
pass: <input type="password" name="lozinka"/> </br>
adresa: <input type="text" name="adresa"/> </br>
telefon: <input type="text" name="telefon"/> </br>
email: <input type="text" name="email"/> </br>
datum rodjenja: <input type="date" name="rodjenje" min="2000-01-02"><br>
drzave: <select id="cmbDrzave" name="Drzave" >
     <?php 
	include"connection.php";
	include"helper/upit_drzave.php";
?>
  </select>
gradovi: <select id="cmbGradovi" name="Gradovi">
<?php 
	include"connection.php";
	include"helper/upit_gradovi.php";
?>
  </select>


<input type = "submit" value="unesi"/>
</form>