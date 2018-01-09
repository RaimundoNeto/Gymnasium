<?php 

	if (!isset($_SESSION)) {
		session_start();
	}

	$conn = new PDO('mysql:host=localhost;port=3306;dbname=DB_Gymnasiumj', 'root', 'mysql'); 

	$nome = $_POST['usuario'];
	$senha = $_POST['senha'];

	$select = $conn->prepare("SELECT * FROM User WHERE usuario = '$nome' AND senha = '$senha'"); 
	$select->execute(); 


	$rowCount = $select->rowCount(); 
	

	if ($rowCount > 0) {
		$_SESSION['usuarioLogado'] = $nome;
		
		Header("Location: index.php");
	}else{
		Header("Location: login.php?err=not_found");

	}

 ?>