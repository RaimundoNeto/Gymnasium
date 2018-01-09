<!--Cadastro de Alunos-->
<?php 


include 'conectal.php';

$nome = isset($_POST['nome']) == true ? $_POST['nome']:"";
$endereco = isset($_POST['endereco']) == true ? $_POST['endereco']:"";
$telefone = isset($_POST['telefone']) == true ? $_POST['telefone']:"";
$cpf = isset($_POST['cpf']) == true ? $_POST['cpf']:"";
$email = isset($_POST['email']) == true ? $_POST['email']:"";
$dataNasci = isset($_POST['dataNasci']) == true ? $_POST['dataNasci']:"";
$tipoTreino = isset($_POST['tipoTreino']) == true ? $_POST['tipoTreino']:"";
$dataIngre = isset($_POST['dataIngre']) == true ? $_POST['dataIngre']:"";
$observacoes = isset($_POST['observacoes']) == true ? $_POST['observacoes']:""; 

if ($nome != '' && $endereco != '' && $cpf != '' && $email != '' && $tipoTreino != '') {
	$sql = "INSERT INTO `tb_cadAluno`(`nome`, `endereco`, `telefone`, `cpf`, `email`, `dataNasci`, `tipoTreino`, `dataIngre`, `observacoes`) VALUES ('$nome', '$endereco', '$telefone', '$cpf', '$email', '$dataNasci', '$tipoTreino', '$dataIngre', '$observacoes');";
	
	$qur = mysqli_query($liga, $sql);

}


header("location: cadAluno.php");
?>

<!--Cadastro de Professores--
<?php

// include 'conectap.php';

// $nome = isset($_POST['nome']) == true ? $_POST['nome']:"";
// $endereco = isset($_POST['endereco']) == true ? $_POST['endereco']:"";
// $telefone = isset($_POST['telefone']) == true ? $_POST['telefone']:"";
// $cpf = isset($_POST['cpf']) == true ? $_POST['cpf']:"";
// $email = isset($_POST['email']) == true ? $_POST['email']:"";
// $dataNasci = isset($_POST['dataNasci']) == true ? $_POST['dataNasci']:"";
// $tipoTreino = isset($_POST['tipoTreino']) == true ? $_POST['tipoTreino']:"";
// $dataIngre = isset($_POST['dataIngre']) == true ? $_POST['dataIngre']:"";

// $cnx = "INSERT INTO `tb_cadProfessor`(`nome`, `endereco`, `telefone`, `cpf`, `email`, `dataNasci`, `dataIngre`) VALUES ('$nome', '$endereco', '$telefone', '$cpf', '$email', '$dataNasci', '$dataIngre');";
// $qury = mysqli_query($linkp, $cnx);

// header("location: cadProfessor.php");
// ?>-->
