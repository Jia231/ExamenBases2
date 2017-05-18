<?php
require '../Model/Employee_Model.php';
require '../Model/ConnectionControl.php';
require '../Model/EmployeeDB.php';

$action = new EmployeeDB();
$database = new ConnectionControl();
$db = $database->Conectar();
$result = $action->getAll($db);
echo json_encode($result);
