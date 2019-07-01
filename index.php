<?php
	session_start();
	if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
	   {
		   unset($_SESSION['login']);
		   unset($_SESSION['senha']);
		   header('location:index.html');
	}
?>
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
<title>Página Principal</title>
<link href="css/estilo2.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="todoconteudo">
    
        <div id="cabecalho"> 
			Cabeçalho
        </div>
        
        <div id="menu">    
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
				 <li><a href="logout.php">Sair</a></li>
              <!-- fim do  menu drop down -->
		</ul>    
        </div>
        
        <div id="corpo">
        Corpo      
        </div>
        
        <div id="rodape">
			rodapé
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>