<?php
    require_once('../../app/models/api.class.php');

    try {
        $api = new API();
        $urls = new URLs();

        $data = $api->post($urls->urlLogout(), $_SESSION['token'], '');
        session_destroy();
        header('Location: ../../index.php');

    } catch (Exception $error) {
        Page::showMessage(2, $error->getMessage(), "");
    }
?>