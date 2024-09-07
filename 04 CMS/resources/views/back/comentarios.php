<div class="container-fluid px-4">
    <h1 class="mt-4">Comentarios</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Comentarios</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php mostrar_msj(); ?>
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="text-primary">Lista de comentarios por validar</h6>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Producto</th>
                                <th>Mensaje</th>
                                <th>Puntaje</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php get_comentarios() ?>
                        </tbody>
                    </table>
                    <?php post_aprobarComentario(); ?>
                </div>
            </div>
        </div>
    </div>
</div>