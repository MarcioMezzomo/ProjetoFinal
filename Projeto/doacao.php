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
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h4>Preencha os dados do formulário para fazer uma doação.</h4>
	    		<br />
				<form method="post" action="validar.php" id="doadores">
					<div class="form-group">
					<!--<label for="nome">Nome</label> -->
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required="requiored">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required="requiored">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="" required="requiored">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="" required="requiored">
					</div>
					<button type="submit" class="btn btn-primary form-control">Enviar</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

			<form>

  <div class="form-row "> 
  <h4>Preencha os dados do formulário para fazer uma doação.</h4><br /><br />
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Doação</label>
      <select id="inputState" class="form-control">
      
				<option> - Selecione uma opção</option>
				<option>Roupa de Inverno Infantil</option>
				<option>Roupa de Inverno adulto</option>
				<option>Calçado Infantil</option>
				<option>Calçado Adulto</option>
				<option>Roupa de Cama Infantil</option>
				<option>Roupa de Cama Adulto</option>
				<option>Cobertor Solteiro</option>
				<option>Cobertor Casal</option>
				<option>Cama Solteiro</option>
				<option>Cama Casal</option>
				<option>Sofá 2 Lugares</option>
				<option>Sofá 3 Lugares</option>
				<option>Microondas</option>
				<option>Fogão</option>
				<option>Geladeira</option>
				<option></option>
				<option>Cobertor Casal</option>
       
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Doação</label>
      <select id="inputState" class="form-control">
      
				<option> - Selecione uma opção</option>
				<option>Roupa de Inverno Infantil</option>
				<option>Roupa de Inverno adulto</option>
				<option>Calçado Infantil</option>
				<option>Calçado Adulto</option>
				<option>Roupa de Cama Infantil</option>
				<option>Roupa de Cama Adulto</option>
				<option>Cobertor Solteiro</option>
				<option>Cobertor Casal</option>
				<option>Cama Solteiro</option>
				<option>Cama Casal</option>
				<option>Sofá 2 Lugares</option>
				<option>Sofá 3 Lugares</option>
				<option>Microondas</option>
				<option>Fogão</option>
				<option>Geladeira</option>
				<option></option>
				<option>Cobertor Casal</option>
       
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Doação</label>
      <select id="inputState" class="form-control">
      
				<option> - Selecione uma opção</option>
				<option>Roupa de Inverno Infantil</option>
				<option>Roupa de Inverno adulto</option>
				<option>Calçado Infantil</option>
				<option>Calçado Adulto</option>
				<option>Roupa de Cama Infantil</option>
				<option>Roupa de Cama Adulto</option>
				<option>Cobertor Solteiro</option>
				<option>Cobertor Casal</option>
				<option>Cama Solteiro</option>
				<option>Cama Casal</option>
				<option>Sofá 2 Lugares</option>
				<option>Sofá 3 Lugares</option>
				<option>Microondas</option>
				<option>Fogão</option>
				<option>Geladeira</option>
				<option></option>
				<option>Cobertor Casal</option>
       
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group col-md-1">
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

		</div>


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