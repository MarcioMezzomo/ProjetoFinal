<?php
    require 'config.php';

/*    session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        //echo 'Area restrita';
    }else{
        header("Location: login.php");
        exit;
    }*/
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
	          <img src="imagens/logo_Elo.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Página Inicial</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    <br/>
 
		<div class="col-md-4"></div>
	    <div class="col-md-4">

			<h4>Junte-se a nós para juntos construírmos um mundo melhor!</h4> 
			<br/>
			<form method="POST" action="adicionarUsuario_action.php">	
    			<div class="form-group">
		<!--	<label>Nome:</label> --> 
			<input type="text" class="form-control" name="nome" placeholder="Nome" required="required"/>
			</div>
			    <div class="form-group">	
		<!--	<label>E-mail: </label> --> 
			<input type="email" class="form-control" name="email" placeholder="E-mail" required="required"/>
				</div>
    			<div class="form-group">
		<!--	<label>Senha:</label> --> 
			<input type="password" class="form-control" name="senha" placeholder="Senha" required="required"/>
			</div>
			<a><input type="submit" value="Cadastrar" class="btn btn-primary form-control"/></a>
			
	
		</form>
		</div>
		<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br/>
			<br/>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<div class="container">
	    	<hr>
	    	<footer>
	    		   		

	    		<blockquote class="blockquote text-center">
				<h4>PROJETO FINAL 3 INFO 1 - COLÉGIO PROTÁSIO ALVES</h4>
  			<h5><strong>Todos os direitos reservados - desenvolvido por 3 INFO 1<br></strong></h5>
				</blockquote>

	    	</footer>
	    </div>
	
	
	</body>
</html>