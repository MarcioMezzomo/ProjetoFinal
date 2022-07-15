<?php

    require 'config.php';
   
    $idDoador = filter_input(INPUT_POST,'idDoador');
    $nome = ucwords(strtolower(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS)));
    $endereco = filter_input(INPUT_POST,'endereco');
    $cidade = filter_input(INPUT_POST,'cidade');
    $estado = filter_input(INPUT_POST,'estado');
    $cep = filter_input(INPUT_POST,'cep');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST,'telefone');
    $doacao1 = filter_input(INPUT_POST,'doacao1');
    $doacao2 = filter_input(INPUT_POST,'doacao2');
    $doacao3 = filter_input(INPUT_POST,'doacao3');
    $descricao = filter_input(INPUT_POST,'descricao');
    $dta_doacao = filter_input(INPUT_POST,'dta_doacao');

    if($idDoador && $nome && $endereco && $cidade && $estado && $cep && $email && $telefone && $doacao1 && $doacao2 && $doacao3 && $descricao && $dta_doacao){
        $sql = "UPDATE doador SET nome = :nome, endereco = :endereco, cidade = :cidade, estado = :estado, cep = :cep, email = :email, telefone = :telefone, doacao1 = :doacao1, doacao2 = :doacao2, doacao3 = :doacao3, descricao = :descricao, dta_doacao = :dta_doacao)  WHERE idDoador = :idDoador";
        $sql = $pdo->prepare($sql);
        $sql ->bindvalue(':idDoador',$idDoador);
        $sql ->bindvalue(':nome',$nome);
        $sql ->bindvalue(':endereco',$endereco);
        $sql ->bindvalue(':cidade',$cidade);
        $sql ->bindvalue(':estado',$estado);
        $sql ->bindvalue(':cep',$cep);
        $sql ->bindvalue(':email',$email);
        $sql ->bindvalue(':telefone',$telefone);
        $sql ->bindvalue(':doacao1',$doacao1);
        $sql ->bindvalue(':doacao2',$doacao2);
        $sql ->bindvalue(':doacao3',$doacao3);
        $sql ->bindvalue(':descricao',$descricao);
        $sql ->bindvalue(':dta_doacao',$dta_doacao);
        $sql->execute();
        header("Location: painelDoador.php");
        exit;

    }else{
        header("Location: painelDoador.php");
    }

?>  