<?php
session_start();

require "../Model/Partial_User.php";
require "../Model/UsuarioDB.php";
require_once '../Model/ConnectionControl.php';
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
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
$usuario = stripslashes($usuario);
$pass = stripslashes($pass);
$usuario = mysqli_real_escape_string($db, $usuario);
$pass = mysqli_real_escape_string($db, $pass);
$pass = md5($pass);
$Partial_User = new Partial_User($usuario,$pass);
$action = new UsuarioDB();
$result =  $action->validateUser($Partial_User,$db);
echo $result;
