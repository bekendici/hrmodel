<form name ="input" action="usersService/service_update.php" method="post">
Unesite novi password: <input type="password" name="lozinka"/> </br>
Unesite novu adresu: <input type="text" name="adresa"/> </br>
Unesite novi telefon: <input type="text" name="telefon"/> </br>
Unesite novu drzavu: <select id="cmbDrzave" name="Drzave" >
     <?php 
	include"connection.php";
	include"helper/upit_drzave.php";
?>
  </select>
Unesite novi grad: <select id="cmbGradovi" name="Gradovi">
<?php 
	include"connection.php";
	include"helper/upit_gradovi.php";
?>
  </select>


<input type = "submit" value="Spasi izmjene"/>
</form>
