<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h1>
		Registration Page <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} ?>
	</h1>
	<form method="POST" action="NameCheck.php">
		<h2>Name: <input type="text" name="pname" value=""></h2> <br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>