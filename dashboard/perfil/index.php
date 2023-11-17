<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Perfil");
    require_once("../../app/controllers/perfil/index_controller.php");
    Page::templateFooter();
?>