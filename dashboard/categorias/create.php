<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Crear Categoria");
    require_once("../../app/controllers/categorias/create_controller.php");
    Page::templateFooter();
?>