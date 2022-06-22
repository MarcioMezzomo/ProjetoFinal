<?php
    require 'config.php';

    $nome = ucwords(strtolower(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS)));
    $email = strtolower(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL));
    $senha = md5(filter_input(INPUT_POST,'senha'));

    if($nome && $email && $senha){

        $sql = "SELECT * FROM usuarios WHERE nome = :nome AND email = :email";
        $sql = $pdo->prepare($sql);
        $sql ->bindvalue('nome',$nome);
        $sql ->bindvalue('email',$email);
        $sql->execute();

        if ($sql->rowCount() > 0){
            echo "Usuario já existe no cadastro";

        } else {

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUE (:nome, :email, :senha)";
        $sql = $pdo->prepare($sql);
        $sql ->bindvalue('nome',$nome);
        $sql ->bindvalue('email',$email);
        $sql ->bindvalue('senha',$senha);
        $sql->execute();
        header("Location: index.php");
       
        exit;
        }

    } else {
        header("Location: adicionarUsuario.php");
    }
?>