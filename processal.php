<?php

	include 'conectal.php';

	$titulo = isset($_POST['titulo']) == true ? $_POST['titulo']:"";
	$local = isset($_POST['local']) == true ? $_POST['local']:"";
	$telefone = isset($_POST['telefone']) == true ? $_POST['telefone']:"";
	$data = isset($_POST['data']) == true ? $_POST['data']:"";
	$detalhes = isset($_POST['detalhes']) == true ? $_POST['detalhes']:"";

	if ($titulo != '' && $local != '' && $data != '') {
		$cox = "INSERT INTO `tb_cadLembrete`(`titulo`, `local`, `telefone`, `data`, `detalhes`) VALUES ('$titulo', '$local', '$telefone', '$data', '$detalhes');";

		$qure = mysqli_query($liga, $cox);
	}
	
	header("location: cadLembretes.php");

  ?>