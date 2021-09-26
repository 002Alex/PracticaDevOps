<?php 
    include('conexion.php');
    
    if(isset($_POST['guarda'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];

        $query = "INSERT INTO empleados(nombre,correo,fecha) VALUES ('$nombre','$correo','$fecha')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Nada");
        }
            
        $_SESSION['message']= 'Datos agregados';
        $_SESSION['message_type']= 'success';
        
        header("Location: index.php");
    }
?>