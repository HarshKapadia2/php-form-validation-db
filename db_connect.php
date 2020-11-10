<?php
	$host = getenv("DB_HOST");
	$user = getenv("DB_USER");
	$password = getenv("DB_PASS");
	$dbname = getenv("DB_NAME");
	$dbtype = getenv("DB_TYPE");

	$dsn = "$dbtype:host=$host;dbname=$dbname";

	try
	{
		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Database connected successfully...";
		// echo "Database connected successfully...<br><br>Data fetched from table:<br>";

		// $table_name = getenv("DB_TABLE_NAME");
		// $query = $pdo->query("SELECT * FROM $table_name");

		// while($row = $query->fetch(PDO::FETCH_ASSOC))
		// 	echo $row["id"] . ": " . $row["name"] . "<br>";
	}
	catch(PDOException $e)
	{
  		echo "Connection failed: " . $e->getMessage();
	}
?>
