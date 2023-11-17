<?php

    try {
        $api = new API();
        $url = new URLs();
        
        $responseUser = $api->get($url->urlUsuarios(), $_SESSION['token']);
        $dataUser = $responseUser->data;

        $responserTipoUser = $api->get($url->urlTipoUsuario(), $_SESSION['token']);
        $dataTipoUser = $responserTipoUser->data;

        $countUsersByTipoUsuario = array();
        $tipoUsuarioList = array();

        for($i = 0; $i < sizeof($dataTipoUser); $i++){
            $counter = 0;
            for($j = 0; $j < sizeof($dataUser); $j++){
                if($dataTipoUser[$i]->id_tipo_usuario == $dataUser[$j]->id_tipo_usuario){
                    $counter++;
                }
            }
            $countUsersByTipoUsuario[$i] = $counter;
            $tipoUsuarioList[$i] = $dataTipoUser[$i]->nombre;
        }       


        require_once("../../app/views/home/index.php");

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    } 

?>