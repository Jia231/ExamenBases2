
<?php
session_start();
if(!isset($_SESSION["Usuario"]) && empty($_SESSION["Usuario"]))
{
    header("Location:Login.php");
}
?>

<div ng-init="Lista_Usuarios()">
    <table class="table">
        <tr>
            <td>Usuario</td>
            <td>Contrasena</td>
            <td>Email</td>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        <tr ng-repeat="usuario in usuarios">
            <td>{{usuario.usuario}}</td>
            <td>{{usuario.contrasena}}</td>
            <td>{{usuario.email}}</td>
            <td>{{usuario.nombre}}</td>
            <td>{{usuario.apellido}}</td>
        </tr>
    </table>

</div>
<a href="#/">Regresar al menu</a>



