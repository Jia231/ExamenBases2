<?php

require "../Model/ConnectionControl.php";
require "../Model/User_Model.php";
require "../Model/UsuarioDB.php";
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
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = stripslashes($usuario);
$pass = stripslashes($pass);
$email = stripslashes($email);
$nombre = stripslashes($nombre);
$apellido = stripslashes($apellido);
$usuario = mysqli_real_escape_string($db, $usuario);
$pass = mysqli_real_escape_string($db, $pass);
$email = mysqli_real_escape_string($db, $email);
$nombre = mysqli_real_escape_string($db, $nombre);
$apellido = mysqli_real_escape_string($db, $apellido);
$pass = md5($pass);
$user = new User_Model($usuario,$pass,$email,$nombre,$apellido);
$action = new UsuarioDB();
$result =  $action->Agregar_Usuario($user,$db);
echo $result;