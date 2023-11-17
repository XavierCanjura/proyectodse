<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Crear tipo de incidente");
    require_once("../../app/controllers/tipos_incidentes/create_controller.php");
    Page::templateFooter();
?>