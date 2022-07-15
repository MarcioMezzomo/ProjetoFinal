<?php
require 'config.php';

/*   session_start();

    if(isset($_SESSION['email'])){

    }else{
        header("Location: login.php");
        exit;
    } */
?>
<?php

$lista = [];
$sql = $pdo->query("SELECT * FROM doador");
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
$lista2 = [];
$sql = $pdo->query("SELECT * FROM voluntario");
if ($sql->rowCount() > 0) {
  $lista2 = $sql->fetchAll(PDO::FETCH_ASSOC);
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
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <!-- <div class="container"> -->
    <h4> Cadastro de Doadores </h4>
    <table border='1' width='100%' class="table table-hover">
      <tr>
        <th>ID </th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CEP</th>
        <th>e-mail</th>
        <th>Telefone</th>
        <th>Doação</th>
        <th>Doação</th>
        <th>Doação</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>AÇÕES</th>
      </tr>
      <?php foreach ($lista as $dados) : ?>
        <tr>
          <!--  <?php echo $dados['id']; ?> -->
          <td> <?= $dados['idDoador']; ?> </td>
          <td> <?= $dados['nome']; ?> </td>
          <td> <?= $dados['endereco']; ?> </td>
          <td> <?= $dados['cidade']; ?> </td>
          <td> <?= $dados['estado']; ?> </td>
          <td> <?= $dados['cep']; ?> </td>
          <td> <?= $dados['email']; ?> </td>
          <td> <?= $dados['telefone']; ?> </td>
          <td> <?= $dados['doacao1']; ?> </td>
          <td> <?= $dados['doacao2']; ?> </td>
          <td> <?= $dados['doacao3']; ?> </td>
          <td> <?= $dados['descricao']; ?> </td>
          <td> <?= $dados['dta_doacao']; ?> </td>
          <td><a href="editarDoador.php?idDoador=<?= $dados['idDoador']; ?>">[Editar]</a> <a href="excluirDoador.php?idDoador=<?= $dados['idDoador']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a> </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <h4> Cadastro de Voluntarios </h4>
    <table border='1' width='100%' class="table table-hover">
      <tr>
        <th>ID </th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CEP</th>
        <th>e-mail</th>
        <th>Telefone</th>
        <th>AÇÕES</th>
      </tr>
      <?php foreach ($lista2 as $dados2) : ?>
        <tr>
          <!--  <?php echo $dados2['id']; ?> -->
          <td> <?= $dados2['idVoluntario']; ?> </td>
          <td> <?= $dados2['nome']; ?> </td>
          <td> <?= $dados2['endereco']; ?> </td>
          <td> <?= $dados2['cidade']; ?> </td>
          <td> <?= $dados2['estado']; ?> </td>
          <td> <?= $dados2['cep']; ?> </td>
          <td> <?= $dados2['email']; ?> </td>
          <td> <?= $dados2['telefone']; ?> </td>
     
          <td><a href="editarVoluntario.php?idVoluntario=<?= $dados2['idVoluntario']; ?>">[Editar]</a> <a href="excluirVoluntario.php?idVoluntario=<?= $dados2['idVoluntario']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a> </td>
        </tr>
      <?php endforeach; ?>
      </table>


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