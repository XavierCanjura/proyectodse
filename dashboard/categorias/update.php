<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Modificar Categoria");
    require_once("../../app/controllers/categorias/update_controller.php");
    Page::templateFooter();
?>