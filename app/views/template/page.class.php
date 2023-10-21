<?php

    require_once("../../app/helpers/component.class.php");
    
    session_start();
    class Page extends Component{

        public static function templateHeader($title){
            // if(!isset($_SESSION['auth'])){
            //     header('Location: ../../index.php');
            // }

            print("
            <!DOCTYPE html>
                <html lang='es'>
                
                <head>
                    <meta charset='UTF-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link rel='stylesheet' href='../../web/css/bootstrap.min.css'>
                    <link rel='stylesheet' href='../../web/css/style.css'>
                    <title>$title</title>
                </head>
                
                <body>
                    <header>
            ");
            Page::navbar();
            Page::sidenav();

            print("
                    </header>
            ");
        }

        public static function templateFooter()
        {
            print("
                </body>
                <script src='../../web/js/bootstrap.bundle.min.js'></script>
                </html>
            ");
        }

        public static function templateLoginHeader(){}

        public static function templateLoginFooter(){}

        public static function navbar()
        {
            require_once("../../app/views/template/navbar.php");
        }

        public static function sidenav()
        {
            $url = $_SERVER['REQUEST_URI'];
            $urlArr = explode('/', $url);
            require_once("../../app/views/template/sidenav.php");
        }
    }

?>