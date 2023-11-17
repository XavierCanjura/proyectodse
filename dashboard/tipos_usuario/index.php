<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Tipos de usuario");
    require_once("../../app/controllers/tipos_usuarios/index_controller.php");
    Page::templateFooter();
?>