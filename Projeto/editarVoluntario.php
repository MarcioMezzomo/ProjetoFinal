<?php
    require 'config.php';

   /* session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
    
    }else{
        header("Location: login.php");
        exit;
    } */

    $info = [];
    $idVoluntario = filter_input(INPUT_GET,'idVoluntario');

    if($idVoluntario){
        $sql = "SELECT * FROM voluntario WHERE idVoluntario = :idVoluntario";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue('idVoluntario', $idVoluntario);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            header("Location: index.php");
            exit;
        }
    }
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>.::Projeto Final::.</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/Elo_solidario.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Página Inicial</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

<form method="POST" action="editar_actionVoluntario.php">

            <input type="hidden" name="idVoluntario" value="<?=$info['idVoluntario'];?>"/>

			<h4>Editar Voluntário</h4> 
			<div class="form-row">  
            <div class="form-group col-md-6">
                <label>Nome:</label> 
                <input type="text" class="form-control" name="nome" value="<?=$info['nome'];?>"/>
            </div>
            <div class="form-group col-md-6">
                <label>Endereço:</label> 
			    <input type="text" class="form-control" name="endereco" value="<?=$info['endereco'];?>"/>
            </div>
        </div>
        <div class="form-row">  
            <div class="form-group col-md-6">  
                <label>Cidade:</label> 
                <input type="text" class="form-control" name="cidade" value="<?=$info['cidade'];?>"/>
            </div>
            <div class="form-group col-md-6">
                <label>Estado:</label> 
                <input type="text" class="form-control" name="estado" value="<?=$info['estado'];?>"/>
            </div>
        </div>
        <div class="form-row">  
            <div class="form-group col-md-6">  
                <label>CEP:</label> 
                <input type="text" class="form-control" name="cep" value="<?=$info['cep'];?>"/>
            </div>
        <div class="form-row">  
            <div class="form-group col-md-6">  
                <label>E-mail: </label>
                <input type="email" class="form-control"  name="email" value="<?=$info['email'];?>"/>
                </div>
            <div class="form-group col-md-6">
                <label>Telefone:</label> 
                <input type="text" class="form-control" onkeypress="$(this).mask('(00) 00000-0000')" name="telefone" value="<?=$info['telefone'];?>"/>
            </div>
        </div>
			
			<br>
            <a onclick="return confirm('Registro alterado com sucesso!')"><input type="submit" value="Alterar" class="btn btn-primary"/></a>  
            <a href="painelDoador.php"class="btn btn-outline-success" > Voltar </a> 
			<a href="sair.php" class="btn btn-outline-danger "> sair </a>
			
</form>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<div class="container">
	    	<hr>
	    	<footer>
	    		   		

	    		<blockquote class="blockquote text-center">
				<h4>PROJETO FINAL 3 INFO 1 - COLÉGIO PROTÁSIO ALVES</h4>
  			<h5><strong>&copy; Desenvolvido por 3 INFO 1<br></strong></h5>
				</blockquote>

	    	</footer>
	    </div>
	
	
	</body>
</html>