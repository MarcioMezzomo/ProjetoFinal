<?php

    require 'config.php';
   
    $idVoluntario = filter_input(INPUT_POST,'idVoluntario');
    $nome = ucwords(strtolower(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS)));
    $endereco = filter_input(INPUT_POST,'endereco');
    $cidade = filter_input(INPUT_POST,'cidade');
    $estado = filter_input(INPUT_POST,'estado');
    $cep = filter_input(INPUT_POST,'cep');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST,'telefone');

    if($idVoluntario && $nome && $endereco && $cidade && $estado && $cep && $email && $telefone){
        $sql = "UPDATE voluntario SET nome = :nome, endereco = :endereco, cidade = :cidade, estado = :estado, cep = :cep, email = :email, telefone = :telefone WHERE idVoluntario = :idVoluntario";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue(':idVoluntario',$idVoluntario);
        $sql ->bindvalue(':nome',$nome);
        $sql ->bindvalue(':endereco',$endereco);
        $sql ->bindvalue(':cidade',$cidade);
        $sql ->bindvalue(':estado',$estado);
        $sql ->bindvalue(':cep',$cep);
        $sql ->bindvalue(':email',$email);
        $sql ->bindvalue(':telefone',$telefone);
        $sql->execute();
        header("Location: painelDoador.php");
        exit;

    }else{
        header("Location: painelDoador.php");
    }

?>  