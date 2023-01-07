<?php
	echo "<h1>Hello World!</h1>";

	include 'config.php';
	
	try 
	{
		$db = new PDO("mysql:host=localhost;dbname=$dbn", $user, $pass);
		
		if (!$db)
		{
			echo "Error!";			
		}
		else
		{
			foreach($db->query("SELECT * FROM t1") as $row) 
			{
				echo $row['id'] . " - " . $row['name'] . "<br>";
			}
		}
	}
	catch (PDOExection $e)
	{
		print($e->getMessage());
	}	
?>