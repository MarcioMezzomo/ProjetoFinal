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
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
    <h4> Cadastro de Doador </h4>
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
          <td><a href="editarDoador.php?idDoador=<?= $dados['idDoador']; ?>">[Editar]</a> <a href="excluirCliente.php?idDoador=<?= $dados['idDoador']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a> </td>
        </tr>
      <?php endforeach; ?>

      <!-- <?php
            $sql = "SELECT doador.idDoador, doador.nome, doador.endereco, doador.cidade, doador.estado, doador.cep, doador.email, doador.telefone FROM doador ";
            $sql = $pdo->query($sql);
            if ($sql->rowCount() > 0) {
              foreach ($sql->fetchAll() as $dados) {
                echo '<tr>';
                echo '<td>' . $dados['idDoador'] . '</td>';
                echo '<td>' . $dados['nome'] . '</td>';
                echo '<td>' . $dados['endereco'] . '</td>';
                echo '<td>' . $dados['cidade'] . '</td>';
                echo '<td>' . $dados['estado'] . '</td>';
                echo '<td>' . $dados['cep'] . '</td>';
                echo '<td>' . $dados['cpf'] . '</td>';
                echo '<td>' . $dados['email'] . '</td>';
                echo '<td>' . $dados['telefone'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo 'Não há registro no banco de dado';
            }

            ?> -->

    </table>

  </div>


  </div>

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