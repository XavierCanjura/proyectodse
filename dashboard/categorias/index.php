<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Categorias");
    require_once("../../app/controllers/categorias/index_controller.php");
    Page::templateFooter();
?>