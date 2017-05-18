<?php

/**
 * UsuarioDb short summary.
 *
 * UsuarioDb description.
 *
 * @version 1.0
 * @author Jia Ming Liou
 */
class UsuarioDB
{
    public static  function Agregar_Usuario (User_Model $usuario,$db){

        $connectionControl = new ConnectionControl();
        $ConnectionString = $db;
        $query1 ="SELECT * FROM `usuarios`";
        $ultimoid =  "";
        if($resultado = mysqli_query($ConnectionString, $query1))
        {
            while($row = $resultado->fetch_array())
            {
                $ultimoid=$row["ID"];
            }
        }

        if($ultimoid==""){
            $ultimoid=1;

        }else{
         $ultimoid =  $ultimoid+1 ;
        }

        $query ="INSERT INTO usuarios (ID,contrasena,usuario,email,nombre,apellido) VALUES ('$ultimoid','$usuario->contrasena','$usuario->usuario','$usuario->email','$usuario->nombre','$usuario->apellido')";
        try{
            if ($result=mysqli_query($ConnectionString, $query))
            {
                $connectionControl->Desconectar();
                $connectionControl = null;
                return true;
            }
            $connectionControl->Desconectar();
            $connectionControl = null;
            return false;
        }
        catch (Exception $exception)
        {
            return false;
        }
    }

    public static function getAll($db){
        $connectionControl = new ConnectionControl();
        $ConnectionString = $db;
        $query ="SELECT * FROM `usuarios`";
        $usuariosArray = [];
        if($resultado = mysqli_query($ConnectionString, $query))
        {
            $usuario="";
            while($row = $resultado->fetch_array())
            {
                $usuario = new User_Model($row["Usuario"],$row["Contrasena"],$row["Email"],$row["Nombre"],$row["Apellido"]);
                array_push($usuariosArray,$usuario);
            }
            $connectionControl->Desconectar();
            $connectionControl=null;
            if(sizeof($usuariosArray)>0){
                return $usuariosArray;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    public static function validateUser(Partial_User $user, $db){
        $username = $user ->usuario;
        $password = $user ->contrasena;
        $connectionControl = new ConnectionControl();
        $ConnectionString = $db;
        $query ="SELECT * FROM `usuarios` WHERE Usuario='".$username."' AND Contrasena='".$password."'";
        if($resultado = mysqli_query($ConnectionString, $query))
        {
            $usuarioEncontrado="";
            while($row = $resultado->fetch_array())
            {
                $usuarioEncontrado=new Partial_User($row["Usuario"],$row["Contrasena"]);
            }
            $connectionControl->Desconectar();
            $connectionControl=null;
            if($usuarioEncontrado->usuario == $username){
                if($usuarioEncontrado->contrasena == $password){
                    $_SESSION["Usuario"] = $username;
                    return true;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}