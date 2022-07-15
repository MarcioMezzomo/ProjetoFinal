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

    $idVoluntario = filter_input(INPUT_GET,'idVoluntario');
    if($idVoluntario){
            $sql = "DELETE FROM voluntario WHERE idVoluntario = :idVoluntario";
            $sql = $pdo->prepare($sql);
            $sql->bindValue('idVoluntario',$idVoluntario);
            $sql->execute();
            header("Location: painelDoador.php");
            exit;
        }
  
?>