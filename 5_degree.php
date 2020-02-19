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
		Registration Page <?php if(isset($_SESSION['degree'])){ echo $_SESSION['degree'];} ?>
	</h1>
	<form method="POST" action="degreeCheck.php">
		<h2>
			Degree:
			
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSC
				<input type="checkbox" name="">MSC
		
		</h2> 
		<br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>