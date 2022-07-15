<?php
    require 'config.php';

   /* session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
    
    }else{
        header("Location: login.php");
        exit;
    } */

    $info = [];
    $idDoador = filter_input(INPUT_GET,'idDoador');

    if($idDoador){
        $sql = "SELECT * FROM doador WHERE idDoador = :idDoador";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue('idDoador', $idDoador);
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

<form method="POST" action="editar_actionDoador.php">

            <input type="hidden" name="idDoador" value="<?=$info['idDoador'];?>"/>

			<h4>Editar Doador</h4> 
			<div class="form-row">  
            <div class="form-group col-md-6">
                <label>Nome</label> 
                <input type="text" class="form-control" name="nome" value="<?=$info['nome'];?>"/>
            </div>
            <div class="form-group col-md-6">
                <label>Endereço</label> 
			    <input type="text" class="form-control" name="endereco" value="<?=$info['endereco'];?>"/>
            </div>
        </div>
        <div class="form-row">  
            <div class="form-group col-md-6">  
                <label>Cidade</label> 
                <input type="text" class="form-control" name="cidade" value="<?=$info['cidade'];?>"/>
            </div>
            <div class="form-group col-md-6">
                <label>Estado:</label> 
                <input type="text" class="form-control" name="estado" value="<?=$info['estado'];?>"/>
            </div>
        </div>
        <div class="form-row">  
            <div class="form-group col-md-6">  
                <label>CEP</label> 
                <input type="text" class="form-control" name="cep" value="<?=$info['cep'];?>"/>
            </div>
        <div class="form-row">  
            <div class="form-group col-md-6">  
                <label>E-mail </label>
                <input type="email" class="form-control" name="email" value="<?=$info['email'];?>"/>
                </div>
            <div class="form-group col-md-6">
                <label>Telefone</label> 
                <input type="text" class="form-control" name="telefone" value="<?=$info['telefone'];?>"/>
            </div>
            <div class="form-group col-md-6">
                        <label for="dta_doacao">Data&nbsp;</label>
                        <input type="date" name="dta_doacao" class="form-control"  value="<?=$info['dta_doacao'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Doação</label>
<!--                        <select id="doacao1" class="form-control" type="text" name="doacao1" > -->

                     <select id="doacao1" class="form-control" type="text" name="doacao1" value="<?=$info['doacao1'];?>" >

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
                            <option>Cobertor Casal</option>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Doação</label>
                    <!--    <select id="doacao2" class="form-control"> -->
                        <select id="doacao2" class="form-control" type="text" name="doacao2" value="<?=$info['doacao2'];?>" >

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
                            <option>Cobertor Casal</option>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Doação</label>
                    <!--    <select id="doacao3" class="form-control"> -->
                        <select id="doacao3" class="form-control"  type="text" name="doacao3" value="<?=$info['doacao3'];?>"  >

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
                            <option>Cobertor Casal</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label>Descrição da Doação</label>
                        <textarea class="form-control" name="descricao" value="<?=$info['descricao'];?>"></textarea>
                    </div>
                </div><br><br>
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