<?php

    try {
        $validate = new Validator();
        $urls = new URLs();
        $api = new API();
        if(isset($_POST['acceder']))
        {
            $_POST = $validate->validateForm($_POST);

            
            if($_POST['correo'] == '' || $_POST['password'] == ''){
                throw new Exception('Ingrese su credenciales');
            }

            if(!$validate->validateEmail($_POST['correo'])){
                throw new Exception('Ingrese un correo valido');
            }
            
            $form = [
                'email' => $_POST['correo'],
                'password' => $_POST['password'],
                'name' => 'admin',
            ];

            $data = $api->post($urls->urlLogin(), '', $form);

            if(!isset($data->token)){
                throw new Exception('Credenciales incorrectas');
            }

            $_SESSION['token'] = $data->token;
            $_SESSION['user'] = $data->user;
            header('Location: ../../dashboard/home');
            
        }

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
    require_once('../../app/views/login/login.php');
?>