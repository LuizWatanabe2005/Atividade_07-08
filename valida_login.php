<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
</head>

<body>

    <?php

    /*usuários salvos.*/

    $usuario_authenticator=false; /*condição*/ 

        $usuarios_app=array(
            array(
                'email' => 'teste@gmail.com',
                'senha' => '123456'
            ),
            
            array(
                'email' => 'teste1@gmail.com',
                'senha' => '1234567'
            )

        );

    /*se caso o email ou a senha for 100% iguais aos salvos, você será autenticado, caso contrário o usuário não existe.*/
    foreach ($usuarios_app as $user) {
        if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
            $usuario_authenticator=true;
        }
    }

    if($usuario_authenticator) {
        echo "Usuário Autenticado.";
    } else {
        echo "Usuário não encontrado.";
    }
            
    ?>

</body>


</html>