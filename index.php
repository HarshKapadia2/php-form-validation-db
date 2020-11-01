<?php
	if(isset($_POST["submit"]))
	{
		$email = $_POST["email"];

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			echo "e-mail is valid.<br>";
		else
			echo "e-mail is not valid.<br>";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Form Validation Assig</title>
	</head>

	<body>
		<div class="error"></div>

		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
			<label for="name">Name: </label>
			<input type="text" name="name" id="name">
			<br>

			<label for="email">e-mail: </label>
			<input type="email" name="email" id="email">
			<br>

			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>
