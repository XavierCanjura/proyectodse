<?php
    try {
        $validator = new Validator();
        $api = new API();
        $url = new URLs();

        if(!isset($_GET['id']))
        {
            Page::showMessage(2, 'Seleccione un tipo de usuario', 'index.php');
            return;
        }
        if(!$validator->validateId($_GET['id'])){
            Page::showMessage(2, 'El id no es valido', 'index.php');
            return;
        }

        $getData = $api->get($url->urlTipoUsuario().'/'.$_GET['id'], $_SESSION['token']);
        if(!$getData->created){
            Page::showMessage(2, 'El tipo de usuario no existe,', 'index.php');
            return;
        }

        require_once('../../app/views/tipos_usuarios/delete.php');
        if(isset($_POST['eliminar'])){
            $data = $api->delete($url->urlTipoUsuario().'/'.$_GET['id'], $_SESSION['token']);
            
            if(!isset($data->created)){
                throw new Exception($data->message);
            }

            Page::showMessage(1, $data->message, 'index.php');
        }
    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
?>