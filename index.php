

<?php include("template/head.php"); ?>
<?php include("template/nav.php"); ?>


<div class="container-fluid">
    <h3 class="text-dark mb-4">Datos Empleados</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">

                 
                    <div class="card shadow mb-3">
                        <div class="card-body">

                            <form action="guardar.php" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="username">
                                                <strong>Nombre Completo</strong></label>
                                            <input class="form-control" type="text" name="nombre" autofocus id="txtnombre" placeholder="Juan Reyes" required />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">
                                                <strong>Correo Electrónico</strong>
                                            </label>
                                            <input class="form-control" type="email" autofocus id="txtemail" placeholder="Juan@ejemplo.com" name="correo" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="first_name">
                                                <strong>Fecha de Ingreso</strong>
                                            </label>
                                            <input class="form-control" type="date" name="fecha" id="fecha" required />
                                        </div>
                                    </div>
                                </div>
                                <div class=" btn-group-sm" role="group">
                                    <button type="submit" class="btn btn-outline-primary" name="guarda" value="guardar"> Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <h3 class="text-dark mb-4">Datos</h3>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                        <label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search" /></label>
                    </div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Fecha de ingreso</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<?php include("template/footer.php"); ?>