<?php
    
    try {
        $validator = new Validator();
        $api = new API();
        $url = new URLs();
        if(isset($_POST['agregar'])){
            $_POST = $validator->validateForm($_POST);
            
            if(!$validator->validateAlphabetic($_POST['nombre'], 1, 50)){
                throw new Exception('Ingrese el nombre del tipo de usuairo');
            }
            if(!$validator->validateAlphabetic($_POST['descripcion'], 1, 100)){
                throw new Exception('Ingrese el descripcion del tipo de usuario');
            }

            $form = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
            ];

            $data = $api->post($url->urlTipoUsuario(), $_SESSION['token'], $form);
            if(!isset($data->created)){
                throw new Exception($data->message);
            }

            Page::showMessage(1, $data->message, 'index.php');

        }
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
    require_once('../../app/views/tipos_usuarios/create.php');
?>