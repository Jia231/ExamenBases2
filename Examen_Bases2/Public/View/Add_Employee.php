
<?php
session_start();
if(!isset($_SESSION["Usuario"]) && empty($_SESSION["Usuario"]))
{
    header("Location:Login.php");
}
?>

<div>
    <form name="agregarEmployee">
        <p>Cedula</p>
        <p>
            <input type="number" class="form-control" ng-model="cedula_empleado" ng-maxlength="9" required employee-phone-number />
        </p>
        <p>Nombre</p>
        <p>
            <input type="text" class="form-control" ng-model="nombre_empleado" required />
        </p>
        <p>Apellido</p>
        <p>
            <input type="text" class="form-control" ng-model="apellido_empleado" required />
        </p>
        <p>Edad</p>
        <p>
            <input type="number" class="form-control" ng-model="edad_empleado" required />
        </p>
        <p>Telefono</p>
        <p>
            <input type="number" class="form-control" ng-model="telefono_empleado" required  />
        </p>
        
            <input type="submit" class="btn btn-primary btn-lg" ng-disabled="agregarEmployee.$invalid" ng-click="Agregar_Empleado()" value="Agregar Empleado" />
        
    </form>
    <a href="#/">Regresar al menu</a>
</div>