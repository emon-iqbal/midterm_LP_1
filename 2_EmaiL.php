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
		Registration Page <?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>
	</h1>
	<form method="POST" action="Email_Check.php">
		<h2>Email: <input type="text" name="csemail" value=""></h2> <br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>