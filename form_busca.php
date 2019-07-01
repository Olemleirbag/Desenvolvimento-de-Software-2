<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buscando</title>
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
			<p><label>Digite um termo para busca</label></p>
        	<input type="text" name="busca" size="35" required>
            <select name="busca" required>
            	<option >Selecione...</option>
				<option id="prof">Professor</option>
				<option id="alu">Aluno</option>
				<option id="turma">Turma</option>
            	           
            </select>
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