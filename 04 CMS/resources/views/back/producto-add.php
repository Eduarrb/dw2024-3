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
                    <form method="post">
                        <div class="form-group">
                            <label for="prod_nombre">Nombre:</label>
                            <input type="text" class="form-control" name="prod_nombre" id="prod_nombre">
                            <div class="text-danger">
                                El campo nombre no debe estar vacio
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prod_nombre">Descripción:</label>
                            <!-- <textarea name="" id="" col="30" rows="3" class="form-control"></textarea> -->
                            <input type="hidden" name="prod_descri" id="prod_descri">
                            <trix-editor input="prod_descri"></trix-editor>
                            <div class="text-danger">
                                El campo nombre no debe estar vacio
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>