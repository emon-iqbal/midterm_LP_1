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
		Registration Page <?php if(isset($_SESSION['gender'])){ echo $_SESSION['gender'];} ?>
	</h1>
	<form method="POST" action="Gender_Check.php">
		<h2>
			Gender:	<input type="radio" name="gender" value="">Male 
					<input type="radio" name="gender" value="">Female
					<input type="radio" name="gender" value="">Other
			
		
		
		</h2> 
		<br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>