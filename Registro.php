<?php
include_once ('db.php');
$Nombre=$_POST["Nombre"];
$Email=$_POST["Email"];
$Region=$_POST["Region"];
$Genero=$_POST["Genero"];
$Motivo= "";
echo  "Datos registrados:<br>";
echo "Nombre: $Nombre, Email: $Email, Region: $Region, Genero: $Genero";
echo "<br>";
echo "Tus motivos son:";
echo "<br>";
echo "<ul>";
if (isset($_POST["motivo"])){
    foreach($_POST["motivo"] as $valor){
        $Motivo = $Motivo .' '.$valor;
        echo "<li>$valor</li>";
    }
}
else{
    echo "No seleccionaste ningun motivo";
}
echo "</ul>";

/*if (isset($_POST['Motivo[]'])){
    $Motivo = implode(' ',$_POST['Motivo[]']);
}
else{
    echo "No seleccionaste ningun motivo";
}*/

    $sql= "INSERT INTO `usuario` (`Identificador`, `Nombre`, `Email`, `Region`, `Genero`, `Motivo`) 
    VALUES (NULL, '$Nombre', '$Email', '$Region', '$Genero', '$Motivo')";
    $result = mysqli_query($conectar, $sql) or trigger_error("Querry failed SQL - Error:".mysqli_error($conectar), E_USER_ERROR);
    echo "$sql";
?>
