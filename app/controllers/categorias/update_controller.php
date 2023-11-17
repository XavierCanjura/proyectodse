<?php
    $nombre = '';
    $descripcion = '';
    try {
        $validator = new Validator();
        $api = new API();
        $url = new URLs();

        if(!isset($_GET['id']))
        {
            Page::showMessage(2, 'Seleccione una categoria', 'index.php');
            return;
        }
        if(!$validator->validateId($_GET['id'])){
            Page::showMessage(2, 'El id no es valido', 'index.php');
            return;
        }

        $getData = $api->get($url->urlCategoryEmergencias().'/'.$_GET['id'], $_SESSION['token']);
        if(!$getData->created){
            Page::showMessage(2, 'La categoria no existe,', 'index.php');
            return;
        }

        $nombre = $getData->data->nombre;
        $descripcion = $getData->data->descripcion;

        if(isset($_POST['modificar'])){
            $_POST = $validator->validateForm($_POST);
            
            if(!$validator->validateAlphabetic($_POST['nombre'], 1, 50)){
                throw new Exception('Ingrese el nombre de la categoria');
            }
            if(!$validator->validateAlphabetic($_POST['descripcion'], 1, 100)){
                throw new Exception('Ingrese el descripcion de la categoria');
            }

            $form = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'activo' => true,
            ];

            $data = $api->put($url->urlCategoryEmergencias().'/'.$_GET['id'], $_SESSION['token'], $form);
            
            if(!isset($data->created)){
                throw new Exception($data->message);
            }

            Page::showMessage(1, $data->message, 'index.php');

        }
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
    require_once('../../app/views/categorias/update.php');
?>