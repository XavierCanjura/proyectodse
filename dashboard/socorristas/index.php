<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Socorristas");
    require_once("../../app/controllers/socorristas/index_controller.php");
    Page::templateFooter();
?>