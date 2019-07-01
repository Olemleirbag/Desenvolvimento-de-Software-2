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
include("conecta.php");//chamando conexão
	if(isset($_GET['cadastrar'])){
		$nome_aluno = $_GET['nome_aluno'];
		$data_nasc = $_GET['data_nasc'];
		$nome_responsavel= $_GET['nome_responsavel'];
		$nome_pai = $_GET['nome_pai'];
		$nome_mae = $_GET['nome_mae'];
		$serie = $_GET['serie'];
		$nome_escola = $_GET['nome_escola'];
		$logradouro = $_GET['logra'];
		$nume = $_GET['num_log'];
		$bairro = $_GET['bairro'];
		$city = $_GET['cidade'];
		$cep = $_GET['cep'];
		$uf = $_GET['uf'];
		$foto = $_GET['foto'];
		$turma = $_GET['turma'];
		$id = 0;
		
	try{
		$sql ="INSERT INTO aluno(matricula,nome_completo,data_nasc,responsavel,nome_pai,nome_mae,serie,escola,foto,cod_turma)
				VALUES (:parametro1, :parametro2, :parametro3,:parametro4,:parametro5,:parametro6,:parametro7,:parametro8,:parametro9,:parametro10)";
		$stmt = $conexao->prepare($sql);
		$stmt->bindParam(':parametro1',$id);
		$stmt->bindParam(':parametro2',$nome_aluno);
		$stmt->bindParam(':parametro3',$data_nasc);
		$stmt->bindParam(':parametro4',$nome_responsavel);
		$stmt->bindParam(':parametro5',$nome_pai);
		$stmt->bindParam(':parametro6',$nome_mae);
		$stmt->bindParam(':parametro7',$serie);
		$stmt->bindParam(':parametro8',$nome_escola);
		$stmt->bindParam(':parametro9',$foto);
		$stmt->bindParam(':parametro10',$turma);
		
		$rs1 = $stmt->execute();
		
		$stmt = $conexao->prepare("INSERT INTO endereco (matricula,logradouro,numero,bairro,cidade,cep,UF) VALUES(:parametro1, :parametro11, :parametro12,:parametro13,:parametro14,:parametro15,:parametro16)");
		$stmt->bindParam(':parametro1',$id);
		$stmt->bindParam(':parametro11',$logradouro);
		$stmt->bindParam(':parametro12',$nume);
		$stmt->bindParam(':parametro13',$bairro);
		$stmt->bindParam(':parametro14',$city);
		$stmt->bindParam(':parametro15',$cep);
		$stmt->bindParam(':parametro16',$uf);
		
		$rs2 = $stmt->execute();
	}catch(PDOException $e){
		print("Erro: " . $e->getMessage());
	}
			
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Aluno</title>
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
				 <li><a href="index.html">Sair</a></li>
              <!-- fim do  menu drop down -->
		</ul>    
        </div>
        
        <div id="corpo">
        <fieldset>
        	<form action="#" method="get">            
     			<p><label>Nome Completo</label></p>
				<p><input type="text" name="nome_aluno" size="50" required></p>
				
			
				<p><label>Data de Nascimento</label></p>
				<p><input type="date" name="data_nasc" ></p>
				
				<p><label>Nome Responsável</label></p>
				<p><input type="text" name="nome_responsavel" size="50" required></p>
				
				<p><label>Nome do Pai</label></p>
				<p><input type="text" name="nome_pai" size="50" required></p>
				
				<p><label>Nome da Mãe</label></p>
				<p><input type="text" name="nome_mae" size="50" required></p>
				
				<p><label>Série na escola</label></p>
				<p><input type="text" name="serie" </p>
					
				<p><label>Onde Estuda? (Nome Escola)</label></p>
				<p><input type="text" name="nome_escola"></p>
				
				<p><label>Logradouro</label></p>
				<p><input type="text" name="logra"></p>
				
				<p><label>Numero</label></p>
				<p><input type="number" name="num_log"></p>
				
				<p><label>Bairro</label></p>
				<p><input type="text" name="bairro"></p>
				
				<p><label>Cidade</label></p>
				<p><input type="text" name="Cidade"></p>
				
				<p><label>CEP</label></p>
				<p><input type="text" name="cep"></p>
				
				<p><label>UF</label></p>
				<p><input type="text" name="uf" size="2"></p>
				
				<label><p>Selecione a Foto do Aluno:/</p></label>
				<p><input type="file" name="foto" id="foto"></p>
				
				<!-- Select que vai buscar as turma disponíveis para cadastro-->
            <label>Seleciona o código de uma turma:</label>
            <select name="turma" required>
            	<option></option>
            	<?php
					$busca = $conexao->query("SELECT * FROM turma"); 
					while ($linha = $busca->fetch(PDO::FETCH_ASSOC)) {
    					echo "<option value={$linha['cod_turma']}>{$linha['cod_turma']}</option>";
					}
                 ?>             
            </select>
            <!-- fim do select -->
			
				
            	<p><input type="submit" name="cadastrar" value="Cadastrar Aluno"> </p>        
            
            </form>
           </fieldset>         
        </div>
        
        <div id="rodape">
			rodapé
        </div>
    
    </div><!-- Fim da div todoconteudo -->
</body>
</html>