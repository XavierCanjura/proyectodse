<?php
    try {
        $api = new API();
        $url = new URLs();
        
        $response = $api->get($url->urlTipoUsuario(), $_SESSION['token']);
        $data = $response->data;
        $dataMapper = array();

        for($i = 0; $i < sizeof($data); $i++) {
            $tipoUsuario = array();

            $tipoUsuario[0] = $data[$i]->id_tipo_usuario;
            $tipoUsuario[1] = $data[$i]->nombre;

            $dataMapper[$i] = $tipoUsuario;
        }

        require_once("../../app/views/categorias/index.php");

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    } 

?>