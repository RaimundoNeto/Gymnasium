<?php

	if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0) {
	    header("location: index.php");
	}
  $liga = mysqli_connect("localhost", "root", "mysql", "DB_Gymnasiumj") or die ("Erro ao se conectar com o Banco de Dados");
?>