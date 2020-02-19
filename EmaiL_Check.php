<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$csemail = $_REQUEST['email'];
		
		
		if(empty(trim($csemail))){
			echo "Null submission found!";
		}else{

	
			if( trim($data[0]) == $csemail){
				$_SESSION['csemail'] = $email;
				

				header("location: 2_EmaiL.php");
			}else{
				echo "invalid email address";
			}
		}

	}
?>