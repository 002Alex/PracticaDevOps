<?php 
    include('conexion.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $query = "DELETE FROM empleados WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die('Nada');
        }

        $_SESSION['message'] = 'Datos eliminados';
        $_SESSION['message_type'] = 'danger';
    
        header("Location: index.php");
    }

?>