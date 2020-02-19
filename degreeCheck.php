<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$prGender = $_REQUEST['degree'];
		
		
		if(empty(trim($mydegree)))
		{
			echo "Null submission found!";
		}else{

	
			if( trim($data[0]) == $mydegree){
				$_SESSION['mydegree'] = $degree;
				

				header("location: 5_degree.php");
			}
			}
		}

	
?>