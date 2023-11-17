<?php
    require_once('../../app/models/api.class.php');

    try {
        $api = new API();
        $url = new URLs();
        
        $response = $api->get($url->urlCategoryEmergencias(), $_SESSION['token']);
        $data = $response->data;
        $dataMapper = array();

        for($i = 0; $i < sizeof($data); $i++) {
            $categoria = array();

            $categoria[0] = $data[$i]->id;
            $categoria[1] = $data[$i]->nombre;

            $dataMapper[$i] = $categoria;
        }

        require_once("../../app/views/categorias/index.php");

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    } 

?>