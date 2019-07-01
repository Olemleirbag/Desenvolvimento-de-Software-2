<!--
 # Etec Tenente Aviador Gustavo Klug
 # Curso: Informática Para Internet
 # Nome: Gabriel Félix de Melo Cruz
 # 3º Módulo -Turma A
 # Disciplina: Desenvolvimento de Software II
 # Competências: Analisar a orientação a objetos e sua aplicação em sistemas web; Integrar sistemas web com sistemas gerenciadores de banco de dados.
 # Prof. Adriano Virgílio
 # Data: 28/06/2019
-->
<?php
	session_start();
	$login = $_POST['login'];
	$senha = md5($_POST['senha']);
	include("conecta.php");

	$sql = "SELECT * FROM professor WHERE login = 1 AND senha = 2";
	$busca = $conexao->prepare($sql);
	$busca->bindParam('1',$login);
	$busca->bindParam('2',$senha);
	$busca->execute();


	if($busca->rowCount()>0)
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:index.php');
	}
	else{
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:index.html');
	}
?>