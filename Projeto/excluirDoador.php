<?php
    require 'config.php';
/*
    session_start();
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        //echo 'Area restrita';
    }else{
        header("Location: login.php");
        exit;
    } */

    $idDoador = filter_input(INPUT_GET,'idDoador');
    if($idDoador){
            $sql = "DELETE FROM doador WHERE idDoador = :idDoador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('idDoador',$idDoador);
            $sql->execute();
            header("Location: painelDoador.php");
            exit;
        }
  
?>