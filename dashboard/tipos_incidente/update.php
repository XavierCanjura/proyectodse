<?php
    require_once("../../app/views/template/page.class.php");
    Page::templateHeader("Modificar tipo de incidente");
    require_once("../../app/controllers/tipos_incidentes/update_controller.php");
    Page::templateFooter();
?>