<?php
    // require_once('../../app/models/api.class.php');

    // try {
    //     $api = new API();
    //     $url = new URLs();
        
    //     $data = $api->get($url->urlHospitales(), "44|laravel_sanctum_2EoSahK6WQ7AHMciBgHu6LjndNLH8GJnkGnyJLI9b2285496");
    //     $dataMapper = array();

    //     for($i = 0; $i < sizeof($data); $i++){
    //         $hospital = array();

    //         $hospital[0] = $data[$i]->id;
    //         $hospital[1] = $data[$i]->nombre;
    //         $hospital[2] = $data[$i]->activo;

    //         $dataMapper[$i] = $hospital;
    //     }

        require_once("../../app/views/home/index.php");

    // } catch (Exception $error) {
    //     Page::showMessage(2, $error->getMessage(), "");
    // } 

?>