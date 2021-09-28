<?php

    include('conexion.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM empleados WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $fila = mysqli_fetch_array($result);
            $nombre = $fila['nombre'];
            $correo = $fila['correo'];
            $fecha = $fila['fecha'];

        }
    }

    if(isset($_POST['modificar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];

        $query = "UPDATE empleados SET nombre = '$nombre', correo = '$correo', fecha = '$fecha' WHERE id = $id";
        mysqli_query($conn,$query);
        header('Location: index.php');
    }
?>
<?php include("template/head.php"); ?>
<?php include("template/nav.php"); ?>

<div class="cont">
    <div class="row">
        <div class=" col-lg-8">
            <div class="card shadow mb-3">
                <div class="card-body">

                    <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="username">
                                        <strong>Nombre Completo</strong></label>
                                    <input class="form-control" type="text" name="nombre" autofocus value="<?php echo $nombre; ?>" placeholder="Juan Reyes" required />
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="email">
                                        <strong>Correo Electrónico</strong>
                                    </label>
                                    <input class="form-control" type="email" autofocus id="txtemail" placeholder="Juan@ejemplo.com" name="correo" value="<?php echo $correo; ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="first_name">
                                        <strong>Fecha de Ingreso</strong>
                                    </label>
                                    <input class="form-control" type="date" name="fecha" id="fecha" value="<?php echo $fecha; ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class=" btn-group-sm" role="group">
                            <button type="submit" class="btn btn-outline-primary" name="modificar" value="modificar"> Modificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include("template/footer.php"); ?>