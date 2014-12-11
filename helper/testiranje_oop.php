<?php
	try{
		$handler = new PDO('mysql:host=localhost;dbname=hrmodell','root','');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
		die();
	}
	
	$query = $handler->query('SELECT * FROM gradovi');
	
	while($r = $query->fetch())
	{
		echo $r['naziv']. '<br>';
	}
	
?>