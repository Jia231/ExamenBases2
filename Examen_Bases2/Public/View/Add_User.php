<?php
session_start();
if(!isset($_SESSION["Usuario"]) && empty($_SESSION["Usuario"]))
{
    header("Location:Login.php");
}
?>

<div>
    <form name="agregarUsuario">
    <p>Usuario</p>
    <p><input type="text" class="form-control" ng-model="username" required /></p>
    <p>Contraseña</p>
    <p><input type="password" class="form-control" ng-model="password" required /></p>
    <p>
    <p>Email</p>
    <p><input type="text" class="form-control" ng-model="email" required /></p>
    <p>
    <p>Nombre</p>
    <p><input type="text" class="form-control" ng-model="Nombre" required /></p>
        <p>
        <p>Apellido</p>
        <p><input type="text" class="form-control" ng-model="Apellido" required /></p>
        <p>
            <input type="button" class="btn btn-primary btn-lg" ng-disabled="agregarUsuario.$invalid" ng-click="Agregar_Usuario()" value="Agregar Usuario" />
        </p>
    </form>
    <a href="#/">Regresar al menu</a>
</div>