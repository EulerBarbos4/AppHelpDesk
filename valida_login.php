<?php
   //Verifica se a autenticação foi realizada
   $usuario_autenticado = false;
   //Usuários do sistema
    $usuarios_app = array(
        array('email'=> 'adm@teste.com.br', 'senha' => '1234'),
        array('email'=> 'user@teste.com.br', 'senha' => 'abcd'),
        array('email'=> 'eulerbarbosa96@gmail.com', 'senha' => '123456')
    );
    /*echo '<pre>';
    print_r($usuarios_app);
    echo '<pre>';*/

    foreach($usuarios_app as $usuarios){
        if($usuarios['email'] == $_POST['email'] && $usuarios['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }  
    }

    if($usuario_autenticado == true){
        echo 'Usuario autenticado <br/>';
    }else{
        header('location: index.php?login=erro');
    }
?>