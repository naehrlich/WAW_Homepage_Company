<?php
	function checkUser($email, $password){
		return true;
	}
	
	session_start();

	if(!isset($_SESSION['signed'])){		
		if(checkUser($_REQUEST['email'], $_REQUEST['password'])){
			$_SESSION['signed']	= true;
			$_SESSION['user'] = $_REQUEST['email'];
			header('Location: index.php?page=login');
		}	
		
	}
	
?>