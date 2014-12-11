<?php
	$rezultat = mysql_query("SELECT * FROM gradovi");
		while($red = mysql_fetch_array($rezultat))
		{
			echo "<option value='".$red["grad_id"]."'>".$red["naziv"]."</option>";
		}
		mysql_free_result($rezultat);

?>