<div class="container-fluid px-4">
    <h1 class="mt-4">Productos</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Productos</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <a href="index.php?producto-add" class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i>    
                        Agregar Producto
                    </a>
                </div>
            </div>
            <?php mostrar_msj(); ?>
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="text-primary">Lista de productos</h6>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody class="productos">
                            <?php get_productos(); ?>
                        </tbody>
                    </table>
                    <?php post_productoDelete(); ?>
                </div>
            </div>
        </div>
    </div>
</div>