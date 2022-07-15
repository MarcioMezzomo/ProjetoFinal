
<?php
	require 'config.php';

	$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
	if($email){
		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql=$pdo->prepare($sql);
		$sql->bindValue(':email',strtolower($email));
		$sql->execute();

		if($sql->rowCount() > 0){
			$sql = $sql->fetch(PDO::FETCH_ASSOC);
			$id = $sql['id'];

			$token = md5(time().rand(0,99999).rand(0,99999));
	
			$sql = "INSERT INTO usuarios_token (id_usuario,hash,expirado_em) VALUES (:id_usuario,:hash,:expirado_em)";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(':id_usuario',$id);
			$sql->bindValue(':hash',$token);
			$sql->bindValue(":expirado_em",date('Y-m-d H:i',strtotime('+1 months')));
			$sql->execute();

			$link = "http://localhost/php/Atividade5/redefinir.php?token=".$token;
			$mensagem = "Clique no link para redefinir sua senha: <br/>".$link;

			$assunto = "Redefinição de senha";
			$header = 'From: seuemail@gmail.com.br'."\r\n".'X-Mailer:PHP/'.phpversion();
			echo $mensagem;
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
	    	
	    <br/>

	
			<form method="POST">
			<div class="col-md-4"></div>
	    	<div class="col-md-4">

				<h4>Qual seu e-mail?</h4> 

				<div class="form-group">
				<input type="email" class="form-control" name="email"></br>
				<button type="submit" class="btn btn-primary form-control">Enviar</button> 
			</div>
				
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