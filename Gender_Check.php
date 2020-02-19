<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$prGender = $_REQUEST['gender'];
		
		
		if(empty(trim($prGender)))
		{
			echo "Null submission found!";
		}else{

	
			if( trim($data[0]) == $prGender){
				$_SESSION['prGender'] = $gender;
				

				header("location: 3_Gender.php");
			}
			}
		}

	
?>