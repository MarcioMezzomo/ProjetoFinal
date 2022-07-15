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

		<!-- inicio da barra de nav -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/logo_Elo.png"/>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Página Inicial</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav><!--fim da barra de nav--> 
	    
		<div class="container">
	    
	    <br/>
	   	
		<!--inicio dos form-->
			<div class="col-md-4"></div>
			<div class="col-md-4">
	    		<h4>Preencha os dados do formulário e em breve entraremos em contato.</h4>
	    		<br/>
				<form method="post" action="https://formsubmit.co/217f204429f60df62caa1e97b9e9b02f" id="doadores">
					
					<input type="hidden" name="_next" value="//localhost/Projeto">
					<input type="hidden" name="_captcha" value="false">

					<div class="form-group">
					<!--<label for="nome">Nome</label> -->
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="required">
					</div>
					
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor e-mail" required="required">
					</div>
					
					<div class="form-group">
						<input type="tel" class="form-control" onkeypress="$(this).mask('(00) 00000-0000')" id="telefone" name="telefone" placeholder="( )" required="required">
					</div>
					
					<div class="form-group">
						<textarea class="form-control" id="message-text" name="mensagem" placeholder="Escreva aqui no que podemos te ajudar" required></textarea>
         			</div>
					<button type="submit" class="btn btn-primary form-control" onclick="obrigado()">Enviar</button>
					
					<script>

						var nome = document.getElementById(nome).value
						
						let nomev = nome.value;

						function obrigado(){

						if(nomev == null){
							alert("aaaaaaa");

						}
							
		
							//			

						}


					</script>


				</form>
			
			</div>
			<!--fim dos form-->
			<br/>
			<br/>
	
			<div class="col-md-4"></div>
			<div class="clearfix"></div>

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


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>