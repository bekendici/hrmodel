<html>
<title>Probna</title>
<body>
<form method="post" action="..\\activityService/servis_unos.php">


<input  type="text" id="naziv" name="naziv">
<input  type="date" id="datum" name="datum">
<textarea rows="4" cols="50" id="opis" name="opis">
</textarea>
<select id="kategorija" name="kategorija" placeholder="Odaberi kategoriju" >
<option>Sport</option>
<option>Zdravlje</option>
<option>Kultura</option>
<option>Obrazovanje</option>
<option>Politika</option>
</select>


<input type="button" style="margin-left:20px;" id="save-button" type="submit" class="btn btn-primary btn-lg btn-inline " value="Save" >

</form>
</body>
</html>