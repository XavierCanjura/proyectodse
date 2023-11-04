<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Home");
    require_once("../../app/controllers/home/index_controller.php");
    Page::templateFooter();
?>