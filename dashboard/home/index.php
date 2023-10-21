<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Home");
    require_once("../../app/views/home/index.php");
    Page::templateFooter();
?>