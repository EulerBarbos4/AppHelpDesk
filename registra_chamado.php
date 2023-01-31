<?php
    session_start();
    $arquivo = fopen('arquivo.hd','a');

    $texto =$_SESSION['id'] .'#'. implode('#',str_replace('#','-',$_POST)) . PHP_EOL;

    fwrite($arquivo,$texto);
    
    fclose($arquivo);
    header('location: abrir_chamado.php');
?>