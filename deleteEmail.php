<?php require_once "./conexion.php" ?>

<?php


$id = $_GET['id'];



$delete="DELETE FROM contacto WHERE id = '$id'";
$resultado= mysqli_query($db, $delete);
if($resultado)
{
    ?>
    <script> window.location="./correos.php"; 
    alert("Registro Eliminado con Exito");
    </script>
    <?php
}
else{
    ?>
    <script> window.location="./correos.php"; 
    alert("Ocurrio un error, intentelo mas tarde");
    </script>
    <?php
    }
?>