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
<title>Formulário de pesquisa</title>
<link href="css/estilo4.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<link href="css/estilo_menu.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="todoconteudo">
    
        <div id="cabecalho"> 
			Cabeçalho
        </div>
        
        <div id="menu">
			<ul>
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
 		</li>
              <!-- fim do  menu drop down -->
		</ul>    
        </div>
        
        <div id="corpo">
	<fieldset>
    <legend>Formulário de Pesquisa</legend>
	<form action="#" method="get">
    <p><label>Digite o código(id) da turma que deseja pesquisa:</label></p>
 	<p><input type="text" name="valor_de_busca" size="50" required> </p>
 	<p><input type="submit" name="buscar" value="Pesquisar"></p>
    </form>
    <?php
		if(isset($_GET['buscar'])){
			include("conecta.php");
			$valor = $_GET['valor_de_busca'];
			$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$comando_sql = "SELECT * FROM turma WHERE cod_turma=$valor";
			$consulta = $conexao->query($comando_sql);
			print "<p>Resultado:</p>";
			while($registro = $consulta->fetch(PDO::FETCH_ASSOC))
					{
						print "<p>Turma:<b>{$registro['cod_turma']}</b><br>
								  Data de início:" .  implode("/", array_reverse(explode("-", $registro['data_inicio'])))."<br>
								  Data de término:" .  implode("/", array_reverse(explode("-", $registro['data_fim'])))."<br>
								  Horário:{$registro['hora_inicial']} as {$registro['hora_final']}
							  </p>";
					}
		}	
	?>    
    </fieldset>
    </div>
        
        <div id="rodape">
			Rodape
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>