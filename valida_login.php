<?php

$user_autenticado = false;
$usuarios_app = [
  ['email' => 'admin@hotmail.com', 'password' => '123456'],
  ['email' => 'kinto@hotmail.com', 'password' => '987654'],
];

foreach ($usuarios_app as $user){
    if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
        $user_autenticado = true;
    }
}

if($user_autenticado){
    echo 'Usuário autenticado!';
}else{
   header('Location: index.php?login=error');
}