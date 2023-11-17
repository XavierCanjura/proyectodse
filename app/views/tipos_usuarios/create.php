<form method="POST">
    <div class="row">
    <?php
        Page::textInput('Nombre', 'nombre', isset($_POST['nombre']) ? $_POST['nombre'] : '', 'Ingrese el nombre', 'text');
        Page::textInput('Descripción', 'descripcion', isset($_POST['descripcion']) ? $_POST['descripcion'] : '', 'Ingrese la descripcion', 'text');
    ?>
        <div class='d-flex justify-content-end'>
            <button type="submit" name='agregar' class="btn btn-agregar me-3">Agregar</button>
            <a class="btn btn-cancelar" href="index.php" role="button">Cancelar</a>
        </div>
    </div>
</form>