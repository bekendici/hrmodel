<html>
<title>provjera</title>
<body>
<?php
	$db = new mysqli('localhost','root','','hrmodel');
	
	$result = mysql_query("SELECT naziv FROM gradovi");
	
	if(!empty($result))
	{
		echo "radi";
	}
	else
	{
		echo "ne radi";
	
	}
?>
</body>
</html>