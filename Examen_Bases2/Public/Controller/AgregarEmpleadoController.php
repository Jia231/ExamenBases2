<?php
require "../Model/ConnectionControl.php";
require "../Model/Employee_Model.php";
require "../Model/EmployeeDB.php";
/**
 * Validar short summary.
 *
 * Validar description.
 *
 * @version 1.0
 * @author Jia Ming Liou
 */
$_POST = json_decode(file_get_contents('php://input'), true);
$conection = new ConnectionControl();
$db = $conection->Conectar();
$nombre = stripslashes($_POST['nombre']);
$apellido = stripslashes($_POST['apellido']);
$cedula = stripslashes($_POST['cedula']);
$telefono = stripslashes($_POST['telefono']);
$edad = stripslashes($_POST['edad']);
$empleado = new Employee_Model($cedula,$nombre,$apellido,$telefono,$edad);
$action = new EmployeeDB();
$result =  $action->Agregar_Empleado($empleado,$db);
echo $result;