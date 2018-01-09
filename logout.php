<?php 
	
	

	if (!isset($_SESSION)) {
		session_start();
	}

	unset($_SESSION['usuarioLogado']);

	header("location: login.php");

	session_destroy();


 ?>