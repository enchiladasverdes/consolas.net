<?php
include 'db.php';
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
session_start();
$_SESSION['usuario'] = $usuario;



$consulta = "SELECT*FROM administrador where Nombre ='$usuario' and Clave ='$clave'";
$resultado = mysqli_query($conectar,$consulta);

$filas = mysqli_num_rows($resultado);
if($filas){
    ?>
     <h1>Inicio de sesión correctamente!</h1>
    <?php
}else{
    ?>
    <h2>Datos incorrectos intente de nuevo</h2>
   <?php
}

?>