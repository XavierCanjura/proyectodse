<?php
    require_once('../../app/models/api.class.php');

    try {
        $api = new API();
        $url = new URLs();
        
        $response = $api->get($url->urlHospitales(), $_SESSION['token']);
        $data = $response->data;
        $dataMapper = array();

        for($i = 0; $i < sizeof($data); $i++) {
            $hospital = array();

            $hospital[0] = $data[$i]->id;
            $hospital[1] = $data[$i]->nombre;
            $hospital[2] = $data[$i]->activo == 1 ? 'Activo' : 'Inactivo';

            $dataMapper[$i] = $hospital;
        }

        require_once("../../app/views/hospitales/index.php");

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    } 

?>