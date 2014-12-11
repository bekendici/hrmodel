<?php
$server = 'localhost';
$user = 'root';
$pasword = '';
$database = 'course';

$db = mysqli_connect($server, $user, $pasword, $database);
if($db)
{
	$result = mysqli_query($db, "SELECT * FROM user");
	while($row = mysqli_fetch_assoc($result))
	{
		print_r($row);
	}
	mysqli_close($db);
}else{
	echo "Ne postoji baza";
	myqli_close($db);
	}
