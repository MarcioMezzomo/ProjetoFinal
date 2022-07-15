<?php
	require 'config.php';

	$dado = [];

		$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
		$senha = filter_input(INPUT_POST,'senha');

		if($email && $senha){
			
			$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
			$sql->bindValue(':email',strtolower($email));
			$sql->bindValue(':senha',md5($senha));
			$sql->execute();
		
				if($sql->rowCount() > 0) {
					
					$dado = $sql->fetch(PDO::FETCH_ASSOC);
				
					if($dado['email'] == "email")
					{
						session_start();
						$_SESSION['email'] = $dado['email'];
						header("Location: index.php");
						exit;
					}
					else
					{
						
						session_start();
						$_SESSION['email'] = $dado['email'];
						header("Location: painelDoador.php");
						exit;
					}
					
				
				}else{
						header("Location: loginUsuario.php");
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
				<h4> Login </h4>
				<form method="POST">
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="E-mail">
			</div>	
			<div class="form-group">
				<input type="password" class="form-control" name="senha" placeholder="Senha">
			</div>
			<div class="form-group">	
				<button type="submit" class="btn btn-primary form-control">Entrar</button> 
			</div>
				<a href="esqueci.php">Esqueci minha senha</a>
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
  			<h5><strong>&copy; Desenvolvido por 3 INFO 1<br></strong></h5>
				</blockquote>

	    	</footer>
	    </div>
	
	
	</body>
</html>