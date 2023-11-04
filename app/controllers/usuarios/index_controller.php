<?php
    require_once('../../app/models/api.class.php');

    try {
        $api = new API();
        $urls = new URLs();

        $data = $api->get($urls->urlUsuarios(), "44|laravel_sanctum_2EoSahK6WQ7AHMciBgHu6LjndNLH8GJnkGnyJLI9b2285496");
        $dataMapper = array();


        for($i = 0; $i < sizeof($data); $i++){
            $user = array();

            $user[0] = $data[$i]->id;
            $user[1] = $data[$i]->nombre_completo;
            $user[2] = $data[$i]->tipo_usuario;

            $dataMapper[$i] = $user;
        }

        require_once('../../app/views/usuarios/index.php');
        
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
?>