<?php
    require 'config.php';
/*
    session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
 
    }else{
        header("Location: login.php");
        exit;
    }
*/
    $info = [];
    $id = filter_input(INPUT_GET,'id');

    if($id){
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            header("Location: index.php");
            exit;
        }
    }
?>

<html>
    <head>
        <title> Editar Usuário</title>
        <meta charset="UTF-8"/> 
	    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    </head>
<body>
<div class="container"> 
<fieldset <fieldset style="width: 75%;">

<form method="POST" action="editar_action.php">

        <input type="hidden" name="id" value="<?=$info['id'];?>"/>

		<h4>Editar Usuário</h4> 

        <div class="form-row">  
            <div class="form-group col-md-6">
                <label>Nome:</label> 
    			<input type="text" class = "form-control" name="nome" value="<?=$info['nome'];?>"/>
                </div>
            <div class="form-group col-md-6">
                <label>E-mail: </label>
			    <input type="email" class = "form-control" name="email" value="<?=$info['email'];?>"/>
                </div>
        </div>
   	<br><br>
        
            <input type="submit" class="btn btn-primary" value="Alterar"> 
            <a href="index.php"class="btn btn-outline-success"> Voltar </a> 
	        <a href="sair.php" class="btn btn-outline-danger "> sair </a>
			
</form>
</div>
</fieldset>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"/></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"/></script>

</body>
</html>