<?php
    //$tipo_usuario = $_SESSION['auth']['id_tipo_usuario'];
?>
<div class="offcanvas offcanvas-start sidenav-sav" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-body" style='padding:0;'>
        <div class='sidenav-img d-flex justify-content-center'>
            <img src="../../web/images/logo_comandos.png" alt="Logo" width="100px">
        </div>
        <h3 class='text-center text-white'>Menú</h3>
        <ul class='sidenav-list-sav'>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'home' ? 'active' : ''?>'>
                <a href="../home"><i class="bi bi-house-door"></i>Home</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'usuarios' ? 'active' : ''?>'> 
                <a href="../usuarios"><i class="bi bi-people"></i>Usuarios</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'socorristas' ? 'active' : ''?>'>
                <a href="../socorristas"> <i class="bi bi-people"></i>Socorristas</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'hospitales'? 'active' : ''?>'>
                <a href="../hospitales"> <i class="bi bi-hospital"></i>Hospitales</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'tipos_incidente'? 'active' : ''?>'>
                <a href="../tipos_incidente"><i class="bi bi-heart-pulse"></i>Tipos de incidentes</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'tipos_usuario'? 'active' : ''?>'>
                <a href="../tipos_usuario"><i class="bi bi-person-badge"></i>Tipos de usuario</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'categorias'? 'active' : ''?>'>
                <a href="../categorias"><i class="bi bi-life-preserver"></i>Categorias de em.</a>
            </li>
            <!-- <li class='sidenav-item-sav <?=$urlArr[3] === 'facturas'? 'active' : ''?>'>
                <a href="../facturas"><i class="bi bi-receipt"></i>Facturas</a>
            </li> -->
        </ul>
        <h3 class='text-center text-white mt-3'>Perfil</h3>
        <ul class='sidenav-list-sav'>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'perfil'? 'active' : ''?>'>
                <a href="../perfil"><i class="bi bi-person-circle"></i>Editar perfil</a>
            </li>
            <li class='sidenav-item-sav <?=$urlArr[3] === 'password'? 'active' : ''?>'>
                <a href="../password"><i class="bi bi-person-circle"></i>Cambiar contraseña</a>
            </li>
            <li class='sidenav-item-sav'>
                <a href="../perfil/logout.php"><i class="bi bi-box-arrow-left"></i>Cerrar sesión</a>
            </li>
        </ul>
    </div>
</div>