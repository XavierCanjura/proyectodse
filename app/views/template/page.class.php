<?php

    require_once("../../app/models/api.class.php");
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/helpers/component.class.php");
    require_once("../../app/helpers/url.class.php");
    
    session_start();
    class Page extends Component{

        public static function templateHeader($title){
            if(!isset($_SESSION['token'])){
                header('Location: ../../index.php');
            }

            print("
            <!DOCTYPE html>
                <html lang='es'>
                
                <head>
                    <meta charset='UTF-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link rel='icon' type='image/x-icon' href='../../web/images/favicon.ico'>
                    <link rel='stylesheet' href='../../web/css/bootstrap.min.css'>
                    <link rel='stylesheet' href='../../web/css/style.css'>
                    <link rel='stylesheet' href='https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css'>
                    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
                    <link href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' rel='stylesheet' />
                    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css'>
                    <title>$title</title>
                </head>
                
                <body>
                    <header>
            ");
            Page::navbar();
            Page::sidenav();

            print("
                    </header>
                    <div class='container-fluid container-sav' id='contenedor'>
                        <h1 class='text-center mt-3'>$title</h1>
            ");
        }

        public static function templateFooter()
        {
            print("
                    </div>
                </body>
                <script src='../../web/js/bootstrap.bundle.min.js'></script>
                <script src='../../web/js/jquery-3.5.1.min.js'></script>
                <script src='../../web/js/jquery.dataTables.min.js'></script>
                <script src='https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js'></script>
                <script src='../../web/js/app.js'></script>
                <script>
                    $(document).ready(function() {
                        $('#dataTable').DataTable({
                            language: {
                                'info': 'Mostrando _START_ a _END_ de _TOTAL_ registros',
                                'emptyTable': 'No se encontraron datos',
                                'zeroRecords': 'No se encontraron datos en la busqueda',
                                'lengthMenu': 'Mostrar _MENU_ registros',
                                'search': 'Buscar',
                                'paginate': {
                                    'next': 'sig.',
                                    'previous': 'prev.' 
                                }
                            },
                            'lengthMenu': [[10, 15, 20, 25, -1], [10, 15, 20, 25, 'All']]
                        });
                    } );
                </script>
                </html>
            ");
        }

        public static function templateLoginHeader()
        {
            print("
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='icon' type='image/x-icon' href='../../web/images/favicon.ico'>
                <title>Login</title>
                <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
                <link rel='stylesheet' href='../../web/css/login.css'>
                <link rel='stylesheet' href='../../web/css/bootstrap.min.css'>
                <script src='../../web/js/sweetalert.min.js'></script>
            </head>
            <body>
            ");
        }

        public static function templateLoginFooter()
        {
            print("                
            </body>
            </html>
            ");
        }

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