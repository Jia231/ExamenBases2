
<?php
session_start();
if(!isset($_SESSION["Usuario"]) && empty($_SESSION["Usuario"]))
{
    header("Location:Login.php");
}
?>

<p><a href="#/Add_Empleado">Agregar Empleado</a></p>
<p><a href="#/Add_Usuario">Agregar Usuario</a></p>
<p><a href="#/Mostrar_Empleados">Mostrar Empleados</a></p>
<p><a href="#/Mostrar_Usuarios">Mostrar Usuarios</a></p>