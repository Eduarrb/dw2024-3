<div class="container-fluid px-4"">
    <h1 class="mt-4">Agregar Productos</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Productos</li>
        <li class="breadcrumb-item active">Agregar Productos</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <?php 
                        $row = get_productoEdit();
                        $errores = post_productoEdit($row['prod_id'], $row['prod_img']);
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="prod_nombre">Nombre:</label>
                            <input type="text" class="form-control" name="prod_nombre" id="prod_nombre" value="<?php echo $row['prod_nombre']; ?>">
                            <div class="text-danger">
                                <?php echo !empty($errores['nombre']) ? $errores['nombre'] : ""; ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="prod_nombre">Descripción:</label>
                            <input type="hidden" name="prod_descri" id="prod_descri" value="<?php echo $row['prod_descri']; ?>">
                            <trix-editor input="prod_descri"></trix-editor>
                            <div class="text-danger">
                                <?php echo !empty($errores['descri']) ? $errores['descri'] : ""; ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="prod_precio">Precio:</label>
                            <input type="number" class="form-control" name="prod_precio" id="prod_precio" step="any" value="<?php echo $row['prod_precio']; ?>">
                            <div class="text-danger">
                                <?php echo !empty($errores['precio']) ? $errores['precio'] : ""; ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="prod_canti">Cantidad:</label>
                            <input type="number" class="form-control" name="prod_canti" id="prod_canti" value="<?php echo $row['prod_canti']; ?>">
                            <div class="text-danger">
                                <?php echo !empty($errores['canti']) ? $errores['canti'] : ""; ?>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="prod_img">Imagen:</label>
                            <br>
                            <img src="../img/<?php echo $row['prod_img']; ?>" alt="<?php echo $row['prod_nombre']; ?>" width="150">
                            <input type="file" class="form-control" name="prod_img" id="prod_img">
                            <div class="text-danger">
                                <?php echo !empty($errores['img']) ? $errores['img'] : ""; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Editar" name="edit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>