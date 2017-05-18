
<?php
session_start();
if(!isset($_SESSION["Usuario"]) && empty($_SESSION["Usuario"]))
{
    header("Location:Login.php");
}
?>

<div ng-init="Lista_Empleados()">
    <table class="table">
        <tr>
            <td>Cedula</td>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        <tr ng-repeat="empleado in empleados">
            <td>{{empleado.cedula}}</td>
            <td>{{empleado.nombre}}</td>
            <td>{{empleado.apellido}}</td>
        </tr>
    </table>
    
</div>
<a href="#/">Regresar al menu</a>



