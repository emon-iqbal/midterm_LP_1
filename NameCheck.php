<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$pname = $_REQUEST['name'];
		
		
		if(empty(trim($pname))){
			echo "Null submission found!";
		}else{

	
			if( trim($data[0]) == $pname){
				$_SESSION['pname'] = $name;
				

				header("location: 1_Name.php");
			}else{
				echo "invalid name";
			}
		}

	}
?>