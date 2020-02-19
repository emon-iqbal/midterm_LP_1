<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$tidob = $_REQUEST['dob'];
		
		
		if(empty(trim($tidob)))
		{
			echo "Null submission found!";
		}else{

	
			if( trim($data[0]) == $tidob){
				$_SESSION['tidob'] = $dob;
				

				header("location: 4_DOB.php");
			}
			}
		}

	
?>