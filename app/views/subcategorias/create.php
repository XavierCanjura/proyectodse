<form method="POST">
    <div class="row">
    <?php
        Page::textInput('Nombre', 'nombre', isset($_POST['nombre']) ? $_POST['nombre'] : '', 'Ingrese el nombre', 'text');
        Page::showSelect('Categoria', 'id_subcategoria', isset($_POST['id_subcategoria']) ? $_POST['id_subcategoria'] : '', $categorias);
    ?>
        <div class='d-flex justify-content-end'>
            <button type="submit" name='agregar' class="btn btn-agregar me-3">Agregar</button>
            <a class="btn btn-cancelar" href="index.php" role="button">Cancelar</a>
        </div>
    </div>
</form>