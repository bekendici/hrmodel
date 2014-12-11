
<form method="post" action="servis_update.php">
Unesita ID Aktivnosti</br>
<input  type="text" id="id_aktivnost" name="id_aktivnost"></br>
Unesite naziv aktivnosti:</br>
<input  type="text" id="naziv" name="naziv"></br>
Unesite datum odrzavanja aktivnosti:</br>
<input  type="date" id="datum" name="datum"></br>
Unesite vrijeme odrzavanja aktivnosti:</br>
<input  type="text" id="vrijeme" name="vrijeme" value="00:00:00"></br>
Unesite opis aktivnosti:</br>
<textarea rows="4" cols="50" id="opis" name="opis">
</textarea></br>
Odaberite kategoriju aktivnosti:</br>
<select id="kategorija" name="kategorija" placeholder="Odaberi kategoriju" >
<option>Sport</option>
<option>Zdravlje</option>
<option>Kultura</option>
<option>Obrazovanje</option>
<option>Politika</option>
</select>


<input style="margin-left:20px;" id="save-button" type="submit" class="btn btn-primary btn-lg btn-inline " value="Save" >

</form>
