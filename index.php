<?php
	$success = "";
	$error = "";

	if(isset($_POST["submit"]))
	{
		$email = $_POST["email"];

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			$success = "The e-mail is valid.";
		else
			$error = "The e-mail is not valid.";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./style.css">

		<title>PHP Form Validation Assig</title>
	</head>

	<body>

		<h1>Form Validation</h1>

		<?php if($error != ""): ?>
			<div id="error"><?php echo $error; ?></div>
		<?php endif; ?>
		
		<?php if($success != ""): ?>
			<div id="success"><?php echo $success; ?></div>
		<?php endif; ?>

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
