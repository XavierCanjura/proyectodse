<?php
    require_once('../../app/models/api.class.php');

    try {
        $api = new API();
        $url = new URLs();
        
        $response = $api->get($url->urlSubCategoryEmergencias(), $_SESSION['token']);
        $data = $response->data;
        $dataMapper = array();

        for($i = 0; $i < sizeof($data); $i++) {
            $subCategoria = array();

            $subCategoria[0] = $data[$i]->id_sub_cat_emergencia;
            $subCategoria[1] = $data[$i]->nombre;
            $subCategoria[2] = $data[$i]->cat_emergencia->nombre;

            $dataMapper[$i] = $subCategoria;
        }

        require_once("../../app/views/subCategorias/index.php");

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    } 

?>