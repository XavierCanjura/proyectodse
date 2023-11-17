<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Modificar Tipo de usuario");
    require_once("../../app/controllers/tipos_usuarios/update_controller.php");
    Page::templateFooter();
?>