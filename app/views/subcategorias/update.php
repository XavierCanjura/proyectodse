<form method="POST">
    <div class="row">
    <?php
        Page::textInput('Nombre', 'nombre', isset($_POST['nombre']) ? $_POST['nombre'] : $nombre, 'Ingrese el nombre', 'text');
        Page::showSelect('Categoria', 'id_subcategoria', isset($_POST['id_subcategoria']) ? $_POST['id_subcategoria'] : $idCategoria, $categorias);
    ?>
        <div class='d-flex justify-content-end'>
            <button type="submit" name='modificar' class="btn btn-agregar me-3">Modificar</button>
            <a class="btn btn-cancelar" href="index.php" role="button">Cancelar</a>
        </div>
    </div>
</form>