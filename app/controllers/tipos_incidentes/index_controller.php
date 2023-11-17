<?php
    require_once('../../app/models/api.class.php');

    try {
        $api = new API();
        $urls = new URLs();

        $response = $api->get($urls->urlTipoIncidente(), $_SESSION['token']);
        $data = $response->data;
        $dataMapper = array();

        for($i = 0; $i < sizeof($data); $i++){
            $tipoIncidente = array();

            $tipoIncidente[0] = $data[$i]->id;
            $tipoIncidente[1] = $data[$i]->nombre;
            $tipoIncidente[2] = $data[$i]->descripcion;

            $dataMapper[$i] = $tipoIncidente;
        }

        require_once('../../app/views/tipo_incidentes/index.php');
        
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
?>