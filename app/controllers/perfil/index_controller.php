<?php

    try {
        $api = new API();
        $url = new URLs();
        $response = $api->get($url->urlTipoUsuario(), $_SESSION['token']);
        $data = $response->data;

        $nombres = $_SESSION['user']->nombres;
        $apellidos = $_SESSION['user']->apellidos;
        $correo = $_SESSION['user']->email;
        $tipoUsuario = '';

        for($i = 0; $i < sizeof($data); $i++){
            if($data[$i]->id_tipo_usuario == $_SESSION['user']->id_tipo_usuario){
                $tipoUsuario = $data[$i]->nombre;
            }
        }

        if(isset($_POST['modificar'])){
            $_SESSION['user']->email = $_POST['correo'];
            Page::showMessage(1, 'Perfil editado', '../../index.php');
        }


        require_once('../../app/views/perfil/index.php');
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
?>