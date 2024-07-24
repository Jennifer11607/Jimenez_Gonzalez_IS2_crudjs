<?php include_once '../../includes/header.php' ?>
<div class="container" style="margin-top: 1cm; width: 29cm; border-radius: 1px;  ">
    <h1 class="text-center" style="font-family: fantasy;">Formulario de Clientes</h1>
    <div class="row justify-content-center mb-3">
    <form class="col-lg-8 border p-3 " style="background-color: rgba(115, 198, 182 ); font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">
    <input type="hidden" name="cli_id" id="cli_id">
    <div class="row mb-3">
        <div class="col text-center">
            <label for="cli_nombre" class="form-label">Nombre</label>
            <input type="text" name="cli_nombre" id="cli_nombre" class="form-control " required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col text-center">
            <label for="cli_apellido" class="form-label">Apellido</label>
            <input type="text" name="cli_apellido" id="cli_apellido" class="form-control " required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col text-center">
            <label for="cli_nit" class="form-label">Nit</label>
            <input type="text" name="cli_nit" id="cli_nit" class="form-control" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col text-center" >
            <label for="cli_telefono" class="form-label">Telefono</label>
            <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" required>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col">
            <button type="submit" id="btnGuardar" class="btn btn-primary w-100 rounded-pill">Guardar</button>
        </div>
        <div class="col">
            <button type="button" id="btnBuscar" class="btn btn-info w-100 rounded-pill">Buscar</button>
        </div>
        <div class="col">
            <button type="button" id="btnModificar" class="btn btn-warning w-100 rounded-pill">Modificar</button>
        </div>
        <div class="col">
            <button type="button" id="btnCancelar" class="btn btn-secondary w-100 rounded-pill">Cancelar</button>
        </div>
        <div class="col">
            <button type="reset" id="btnLimpiar" class="btn btn-secondary w-100 rounded-pill">Limpiar</button>
        </div>
    </div>
</form>

    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 table-responsive">
            <h2 class="text-center">Listado de Clientes</h2>
            <table class="table table-bordered table-hover" id="tablaClientes">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nit</th>
                        <th>Telefono</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">No hay clientes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/Jimenez_Gonzalez_IS2_crudjs/src/js/funciones.js"></script>
<script defer src="/Jimenez_Gonzalez_IS2_crudjs/src/js/clientes/index.js"></script>
<?php include_once '../../includes/footer.php' ?>