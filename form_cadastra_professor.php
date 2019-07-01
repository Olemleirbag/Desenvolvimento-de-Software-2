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
	 include("conecta.php");
	
	try{
		
		$nome = $_GET['nome_prof'];
		$email = $_GET['email'];
		$celular = $_GET['celular'];
		$login = $_GET['login'];
		$senha = $_GET['senha'];
		
		$sql = "INSERT INTO 
			professor (nome,email,telefone,login,senha)
			VALUES (:valor1,:valor2,:valor3,:valor4,:valor5)";
		
		$stmt = $conexao -> prepare($sql);
		
		$stmt->bindParam(':valor1',$nome);
		$stmt->bindParam(':valor2',$email);
		$stmt->bindParam(':valor3',$celular);
		$stmt->bindParam(':valor4',$login);
		$stmt->bindParam(':valor5',$senha);
				
		$rs = $stmt -> execute();
		
		if($rs){
			echo "<script>alert('Dados Gravados com Sucesso!')</script>";
		}else{
		echo var_dump($stmt->errorInfo());
		}
		
	}catch(PDOException $e){
		echo "Erro: " . $e ->getMessage();
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Professores</title>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link href="css/estilo5.css" rel="stylesheet" type="text/css">
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
				 <li><a href="index.html">Sair</a></li>
              <!-- fim do  menu drop down -->
		</ul>    
        </div>
        
        <div id="corpo">
        <fieldset>
        	<form action="#" method="get"> 
				
				<label><p>Usuário (login)</p></label>
				<p><input type="text" name="login" ></p>
				
				<label><p>Senha</p></label>
				<p><input type="text" name="senha"></p>
							
     			<p><label>Nome do professor</label></p>
				<p><input type="text" name="nome_prof" size="50" required></p>
				
				<label><p>Celular</p></label>
				<p><input type="tel" name="celular" ></p>
				
				<p><label>E-Mail</label></p>
				<p><input type="text" name="email" size="30" ></p>
					
            	<p><input type="submit" name="cadastrar" value="Cadastrar Professor"> </p>        
            
            </form>
           </fieldset>         
        </div>
        
        <div id="rodape">
			rodapé
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>