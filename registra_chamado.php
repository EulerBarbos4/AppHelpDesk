<?php

    $arquivo = fopen('arquivo.hd','a');

    $texto = implode('#',str_replace('#','-',$_POST)) . PHP_EOL;

    fwrite($arquivo,$texto);
    
    fclose($arquivo);
    header('location: abrir_chamado.php');
?>