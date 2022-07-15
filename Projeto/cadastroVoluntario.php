<?php
require 'config.php';

/* session_start();

    if(isset($_SESSION['email'])){
       
    }else{
        header("Location: login.php");
        exit;
    } */

$nome = ucwords(strtolower(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)));
$endereco = filter_input(INPUT_POST, 'endereco');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$cep = filter_input(INPUT_POST, 'cep');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone');

if ($nome && $email && $endereco && $cidade && $estado && $cep && $email && $telefone) {
    $sql = "SELECT * FROM voluntario WHERE nome = '$nome' AND email = '$email'";
    $sql = $pdo->query($sql);
    $sql->bindvalue('nome', $nome);
    $sql->bindvalue('email', $email);
    //    $sql->execute();

    if ($sql->fetch() > 0) {
        header("Location: index.php");
        exit;
    } else {
        $sql = "INSERT INTO voluntario (nome, endereco, cidade, estado, cep, email, telefone) 
        VALUE (:nome, :endereco, :cidade, :estado, :cep, :email, :telefone)";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue('nome', $nome);
        $sql->bindvalue('endereco', $endereco);
        $sql->bindvalue('cidade', $cidade);
        $sql->bindvalue('estado', $estado);
        $sql->bindvalue('cep', $cep);
        $sql->bindvalue('email', $email);
        $sql->bindvalue('telefone', $telefone);
        $sql->execute();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

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
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">
        <br /><br />

        <h4>Cadastro Voluntário</h4>

        <form method="POST">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome&nbsp;</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" required="required" />
                </div>
                <div class="form-group col-md-6">
                    <label for="endereco">Endereço&nbsp;</label>
                    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Rua, nº" required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade&nbsp;</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade" required="required" />
                </div>
                <div class="form-group col-md-6">
                    <label for="estado">Estado&nbsp;</label>
                    <input type="text" name="estado" class="form-control" id="estado" placeholder="Ex: RS" required="required" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cep">CEP&nbsp;</label>
                    <input type="text" name="cep" minlength="10" maxlength="10" onkeypress="$(this).mask('00.000-000')" class="form-control" id="cep" placeholder="CEP" required="required"/>
                </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail&nbsp;</label>
                        <input type="e-mail" name="email" class="form-control" id="email" placeholder="Digite seu melhor e-mail" required="required"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefone">Telefone&nbsp;</label>
                        <input type="text" name="telefone" onkeypress="$(this).mask('(00)00000-0000')" class="form-control" id="telefone" placeholder="( )" required="required" />
                    </div>
                    <div class="form-group col-md-6">
                    <label for="descricao">Descrição do Voluntariado</label>
                        <textarea class="form-control" id="descricao" name="descricao" placeholder="Informe que dia(s) e horário(s) tens disponibilidade"></textarea>
                    </div>
                </div><br><br>
                <div class="form-group col-md-6">
                <input type="submit" class="btn btn-primary " value="Cadastrar" onclick="confirmacao()"> 
                <a href="index.php" class="btn btn-primary "> Voltar </a>
<!--                <a href="sair.php" class="btn btn-primary  "> sair </a> -->
                <script>function confirmacao(){  
                    alert("Seu cadastro foi realizado com sucesso!");            
                } </script>    
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