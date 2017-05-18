<?php
require '../Model/User_Model.php';
require '../Model/ConnectionControl.php';
require '../Model/UsuarioDB.php';

$action = new UsuarioDB();
$database = new ConnectionControl();
$db = $database->Conectar();
$result = $action->getAll($db);
echo json_encode($result);
