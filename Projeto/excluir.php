<?php
    require 'config.php';

    session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        //echo 'Area restrita';
    }else{
        header("Location: login.php");
        exit;
    }

    $id = filter_input(INPUT_GET,'id');
    if($id){
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('id',$id);
            $sql->execute();
            header("Location: index.php");
            exit;
        }
  
?>