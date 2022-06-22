<?php

    require 'config.php';
    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'nome');
    $email = filter_input(INPUT_POST,'email');

    if($id && $nome && $email){
        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindvalue(':id',$id);
        $sql->bindvalue(':nome',$nome);
        $sql->bindvalue(':email',$email);
        $sql->execute();
        header("Location: index.php");
        exit;

    }else{
        header("Location: editar.php");
    }

?>