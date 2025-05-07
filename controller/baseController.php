<?php

function handleform(){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $login = isset($_POST['login']) ? trim($_POST['login']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';
        $admin = isset($_POST['admin']) ? 1 : 0;

        if(!empty($login) && ! empty($password)){
            return[
                'login' => ($login),
                'password_masked' => str_repeat("1234", strlen($password)),
                'admin' => $admin,
                'error' => false
            ];
        }else{
            return['error' => true];
        }

    }
    return null;
}

      