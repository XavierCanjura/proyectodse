<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Hospitales");
    require_once("../../app/controllers/hospitales/index_controller.php");
    Page::templateFooter();
?>