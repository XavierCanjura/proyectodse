<?php
    require_once('../../app/views/template/page.class.php');
    if(isset($_SESSION['token']))
    {
        header('Location: ../../dashboard/home');
    }
    Page::templateLoginHeader();
    require_once('../../app/controllers/login/login_controller.php');
    Page::templateLoginFooter();

?>