<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Sub Categorias");
    require_once("../../app/controllers/subcategorias/index_controller.php");
    Page::templateFooter();
?>