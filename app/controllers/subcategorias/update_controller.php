<?php
    $nombre = '';
    $idCategoria = '';
    try {
        $validator = new Validator();
        $api = new API();
        $url = new URLs();

        if(!isset($_GET['id']))
        {
            Page::showMessage(2, 'Seleccione una subcategoria', 'index.php');
            return;
        }
        if(!$validator->validateId($_GET['id'])){
            Page::showMessage(2, 'El id no es valido', 'index.php');
            return;
        }

        $getData = $api->get($url->urlSubCategoryEmergencias().'/'.$_GET['id'], $_SESSION['token']);
        if(!$getData->created){
            Page::showMessage(2, 'La subcategoria no existe,', 'index.php');
            return;
        }

        $response = $api->get($url->urlCategoryEmergencias(), $_SESSION['token']);
        $categorysData = $response->data;
        $categorias = array();

        for($i = 0; $i < sizeof($categorysData); $i++){
            $categoria = array();

            $categoria[0] = $categorysData[$i]->id;
            $categoria[1] = $categorysData[$i]->nombre;

            $categorias[$i] = $categoria;
        }

        $nombre = $getData->data[0]->nombre;
        $idCategoria = $getData->data[0]->id_cat_emergencia;

        if(isset($_POST['modificar'])){
            $_POST = $validator->validateForm($_POST);
            
            if(!$validator->validateAlphabetic($_POST['nombre'], 1, 50)){
                throw new Exception('Ingrese el nombre de la categoria');
            }
            if(!$validator->validateId($_POST['id_subcategoria'])){
                throw new Exception('Seleccione la categoria a la que pertenece la subcategoria');
            }

            $form = [
                'nombre' => $_POST['nombre'],
                'id_cat_emergencia' => $_POST['id_subcategoria'],
            ];

            $data = $api->put($url->urlSubCategoryEmergencias().'/'.$_GET['id'], $_SESSION['token'], $form);
            print_r($data);
            if(!isset($data->created)){
                throw new Exception($data->message);
            }

            Page::showMessage(1, $data->message, 'index.php');

        }
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
    require_once('../../app/views/subcategorias/update.php');
?>