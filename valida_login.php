<?php
   
   session_start();
   
   //Verifica se a autenticação foi realizada
   $usuario_autenticado = false;
   $usuario_id = null;
   $usuario_perfil_id = null;

   $perfis = array(1=>'Administrativo', 2=>'Usuário');

   //Usuários do sistema
    $usuarios_app = array(
        array('id'=> 1,'email'=> 'adm@teste.com.br', 'senha' => '1234', 'perfil_id'=>1),
        array('id'=> 2,'email'=> 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id'=>1),
        array('id'=> 3,'email'=> 'eulerbarbosa96@gmail.com', 'senha' => '123456', 'perfil_id'=>2),
        array('id'=> 4,'email'=> 'maria@teste.com', 'senha' => '123456', 'perfil_id'=>2)
    );
   

    foreach($usuarios_app as $usuarios){
        if($usuarios['email'] == $_POST['email'] && $usuarios['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $usuarios['id'];
            $usuario_perfil_id = $usuarios['perfil_id'];
        }  
    }

    if($usuario_autenticado == true){
        echo 'Usuario autenticado <br/>';
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('location: home.php');
    }else{
        $_SESSION['autenticado'] = 'nao';
        header('location: index.php?login=erro');
    }
?>