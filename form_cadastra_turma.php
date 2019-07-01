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
	if(isset($_GET['cadastrar'])){
		$nome = $_GET['nome_turma'];
		$data_inicio = $_GET['data_inicio'];
		$data_termino = $_GET['data_termino'];
		$hora_inicio = $_GET['hora_inicio'];
		$hora_termino = $_GET['hora_termino'];
		$id = 0;
		include("conecta.php");//chamando conexão
		$sql ="INSERT INTO turma(cod_turma,nome_turma,data_inicio,data_fim,hora_inicial,hora_final)
				VALUES (:parametro1, :parametro2, :parametro3,:parametro4,:parametro5,:parametro6)";
		$stmt = $conexao->prepare($sql);
		$stmt->bindParam(':parametro1',$id);
		$stmt->bindParam(':parametro2',$nome);
		$stmt->bindParam(':parametro3',$data_inicio);
		$stmt->bindParam(':parametro4',$data_termino);
		$stmt->bindParam(':parametro5',$hora_inicio);
		$stmt->bindParam(':parametro6',$hora_termino);
		$rs = $stmt->execute();
		if($rs){
			echo "<script>alert('Dados Gravados com Sucesso!')</script>";
		}else{
			echo var_dump($stmt->errorInfo());
		}
	}
?>	

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadasto de Turma</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div id="todoconteudo">
		
			<div id="cabecalho">
				CABEÇALHO
			</div>
	
			<div id="menu" >
					<ul>
              <li><a href="index.php">Home</a></li>
              <!-- Aqui começa o seu menu-drop down -->
               <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Cadastrar</a>
                <div class="dropdown-content">
                  <a href="http://localhost:8080/escola_futebol/form_cadastra_aluno.php">Cadastro de Alunos</a>
                  <a href="http://localhost:8080/escola_futebol/form_cadastra_professor.php">Cadastro de Professor</a>
                  <a href="http://localhost:8080/escola_futebol/form_cadastra_turma.php">Cadastro de Turma</a>
				  	
                </div>
				   
 			 </li>
				<li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Busca</a>
                <div class="dropdown-content">
                  
				  <a href="http://localhost:8080/escola_futebol/form_consulta.php">Consulta de Turma</a>
				  <a href="http://localhost:8080/escola_futebol/form_exibir_turma.php">Relatório de Turma</a>
				  <a href="http://localhost:8080/escola_futebol/form_busca.php">Busca Turma</a>	
                </div>
				   
				</li>
				 <li><a href="index.html">Sair</a></li>
              <!-- fim do  menu drop down -->
		</ul>    
			</div>
	
		<div id="corpo">
			<fieldset>
				<legend>Cadastro de Turma</legend>
			<form action="#"  method="get">
				<p><label>Nome Turma</label></p>
				<p><input type="text" name="nome_turma" size="50"></p>
				<p><label>Data Início</label></p>
				<p><input type="date" name="data_inicio"></p>
				<p><label>Data Término</label></p>
				<p><input type="date" name="data_termino"></p>
				<p><label>Hora Inicial</label></p>
				<p><input type="time" name="hora_inicio"></p>
				<p><label>Hora Final</label></p>
				<p><input type="time" name="hora_termino"></p>
				<p><input type="submit" value="Cadastrar" name="cadastrar"></p>
			</form>
			</fieldset>
		
		</div>
		<div id="rodape">
			RODAPÉ
		</div>
	</div>
	</body>
</html>