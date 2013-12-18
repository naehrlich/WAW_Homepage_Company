<?php
	if(!isset($_SESSION['signed'])){
		require_once 'login.inc.php';
	}else{
		echo "Eingeloggt als ".$_SESSION['user'];
	}
?>