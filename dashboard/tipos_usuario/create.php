<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Crear Tipo de usuario");
    require_once("../../app/controllers/tipos_usuarios/create_controller.php");
    Page::templateFooter();
?>