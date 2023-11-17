<?php
    try {
        $validator = new Validator();
        $api = new API();
        $url = new URLs();
        if(isset($_POST['agregar'])){
            $_POST = $validator->validateForm($_POST);
            
            if(!$validator->validateAlphabetic($_POST['nombre'], 1, 255)){
                throw new Exception('Ingrese el nombre de la categoria');
            }
            if(!$validator->validateAlphabetic($_POST['descripcion'], 1, 255)){
                throw new Exception('Ingrese el descripcion de la categoria');
            }

            $form = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'activo' => true,
            ];

            $data = $api->post($url->urlTipoIncidente(), $_SESSION['token'], $form);
            
            if(!isset($data->created)){
                throw new Exception($data->message);
            }

            Page::showMessage(1, $data->message, 'index.php');

        }
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
    require_once('../../app/views/tipo_incidentes/create.php');
?>