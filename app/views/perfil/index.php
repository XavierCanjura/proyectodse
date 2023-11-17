<form method="POST">
    <div class="row">
    <?php
        Page::textInput('Nombres', 'nombres', isset($_POST['nombres']) ? $_POST['nombres'] : $nombres, 'Ingrese los nombres', 'text', true);
        Page::textInput('Apellidos', 'apellidos', isset($_POST['apellidos']) ? $_POST['apellidos'] : $apellidos, 'Ingrese los apellidos', 'text', true);
        Page::textInput('Correo electrónico', 'correo', isset($_POST['correo']) ? $_POST['correo'] : $correo, 'Ingrese el correo electrónico', 'text');
        Page::textInput('Tipo de usuario', 'tipoUsuario', isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : $tipoUsuario, 'Ingrese el tipo de usuario', 'text', true);
    ?>
        <div class='d-flex justify-content-end'>
            <button type="submit" name='modificar' class="btn btn-agregar me-3">Modifcar</button>
            <a class="btn btn-cancelar" href="index.php" role="button">Cancelar</a>
        </div>
    </div>
</form>