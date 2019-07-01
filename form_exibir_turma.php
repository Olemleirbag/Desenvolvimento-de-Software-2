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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exibir Aluno</title>
<link href="css/estilo3.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
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
			<h1 id="h1_1">RELATÓRIO DE TURMAS</h1>
			<table align="center" border="2" id="table">
				<tr id="linha1_tabela">
					<td>Código</td>
					<td>Nome Turma</td>
					<td>Data Inicial</td>
					<td>Data Final</td>
					<td>Hora Inicial</td>
					<td>Hora Final</td>
				</tr>
			
			<?php
				include("conecta.php");
				$comand_sql = "SELECT *FROM turma";
				$consulta = $conexao->query($comand_sql); 
				
				while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
					echo "<tr>";
					echo "<td>{$registro['cod_turma']}</td>";
					echo "<td>{$registro['nome_turma']}</td>";
					echo "<td>" . implode("/",array_reverse(explode("-", $registro['data_inicio'])))."</td>";
					echo "<td>" . implode("/",array_reverse(explode("-", $registro['data_fim'])))."</td>";
					echo "<td>{$registro['hora_inicial']}</td>";
					echo "<td>{$registro['hora_final']}</td>";
					echo "</tr>";
				}
			?>
		</table>
			
		</div>
		<div id="rodape">
			RODAPÉ
		</div>
	</div>
</body>
</html>