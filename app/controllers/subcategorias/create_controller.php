<?php
    
    try {
        $validator = new Validator();
        $api = new API();
        $url = new URLs();

        $response = $api->get($url->urlCategoryEmergencias(), $_SESSION['token']);
        $getData = $response->data;
        $categorias = array();

        for($i = 0; $i < sizeof($getData); $i++){
            $categoria = array();

            $categoria[0] = $getData[$i]->id;
            $categoria[1] = $getData[$i]->nombre;

            $categorias[$i] = $categoria;
        }


        if(isset($_POST['agregar'])){
            $_POST = $validator->validateForm($_POST);
            if(!$validator->validateAlphabetic($_POST['nombre'], 1, 50)){
                throw new Exception('Ingrese el nombre de la subcategoria');
            }
            if(!$validator->validateId($_POST['id_subcategoria'])){
                throw new Exception('Seleccione la categoria a la que pertenece la subcategoria');
            }

            $form = [
                'nombre' => $_POST['nombre'],
                'id_cat_emergencia' => $_POST['id_subcategoria'],
            ];

            $data = $api->post($url->urlSubCategoryEmergencias(), $_SESSION['token'], $form);
            if(!isset($data->created)){
                throw new Exception($data->message);
            }

            Page::showMessage(1, $data->message, 'index.php');

        }
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
    require_once('../../app/views/subcategorias/create.php');
?>