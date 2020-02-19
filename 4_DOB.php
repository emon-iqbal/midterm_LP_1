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
		Registration Page <?php if(isset($_SESSION['dob'])){ echo $_SESSION['dob'];} ?>
	</h1>
	<form method="POST" action="dob_Check.php">
		<h2>
			Date Of Birth:</br>
				
					<input type="text" size="4" name="dd">/
					<input type="text" size="4" name="mm">/
					<input type="text" size="4" name="yyyy">(dd/mm/yyyy)
					<h3>_________________________</h3>
		</h2>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>